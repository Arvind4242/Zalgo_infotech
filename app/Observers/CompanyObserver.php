<?php

namespace App\Observers;

use App\Models\Company;
use Illuminate\Support\Facades\Mail;
use App\Mail\CompanyProfileMail;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class CompanyObserver
{
    /** fields we never notify on */
    protected array $ignoreOnUpdate = [
        'updated_at',
        // add any others you don't want to trigger mails for
        // 'last_login_at', 'synced_at', ...
    ];

    public function created(Company $company): void
    {
        Log::info('CompanyObserver: created() called for company: ' . $company->id);
        
        if (!empty($company->email)) {
            Log::info('CompanyObserver: Sending creation email to: ' . $company->email);
            
            $profileLink = url('/company/' . $company->slug);
            
            try {
                // Send immediately, no queue needed
                Mail::to($company->email)->send(
                    new CompanyProfileMail($company, $profileLink, [])
                );
                Log::info('CompanyObserver: Creation email sent successfully');
            } catch (\Exception $e) {
                Log::error('CompanyObserver: Failed to send creation email: ' . $e->getMessage());
            }
        } else {
            Log::info('CompanyObserver: No email address provided, skipping creation email');
        }
    }

    public function updated(Company $company)
{
    Log::info('CompanyObserver: updated() called for company: ' . $company->id);

    if (empty($company->email)) {
        Log::info('CompanyObserver: No email address, skipping update email');
        return;
    }

    $fields = [
        'company_name', 'business_types', 'categories', 'banner', 'logo', 'summary',
        'gst', 'brand', 'address_line_1', 'address_line_2', 'state_id', 'city_id',
        'pincode', 'landline_1', 'landline_2', 'email', 'fax', 'protocol', 'website_url',
        'twitter_x_url', 'facebook_url', 'insta_url', 'linkedin_url', 'contact_person',
        'mobile', 'contact_person_landline', 'display_number', 'owner_1', 'owner_2',
        'owner_phone_1', 'owner_phone_2', 'product_details', 'age_group', 'price',
        'establishment_year', 'yearly_turnover', 'export_area_present', 'export_area_rqrd',
        'newspapers', 'news_channels', 'festive_period', 'special_comments',
        'display_order', 'user_id', 'show_profiles', 'show_products',
        'agent_distributors_rqrd', 'newsletter_sponser', 'sponser'
    ];

    $changes = [];
    $checkedFields = 0;

    foreach ($fields as $field) {
        // Skip ignored fields
        if (in_array($field, $this->ignoreOnUpdate)) {
            continue;
        }

        $checkedFields++;

        try {
            // Handle relationship fields separately
            if (in_array($field, ['business_types', 'categories'])) {

                // Fetch original IDs from pivot table
                $tableName = $field . '_company'; // e.g., business_types_company
                $relatedIdColumn = $field === 'business_types' ? 'business_type_id' : 'category_id';

                $originalIds = DB::table($tableName)
                    ->where('company_id', $company->id)
                    ->pluck($relatedIdColumn)
                    ->toArray();

                $currentIds = $company->$field->pluck('id')->toArray();

                // Compare
                $oldStr = implode(', ', $company->$field()->whereIn('id', $originalIds)->pluck('name')->toArray()) ?: 'N/A';
                $newStr = implode(', ', $company->$field->pluck('name')->toArray()) ?: 'N/A';

            } else {
                $oldValue = $company->getOriginal($field);
                $newValue = $company->$field;

                $oldStr = $this->formatValue($field, $oldValue);
                $newStr = $this->formatValue($field, $newValue);
            }

            Log::debug("CompanyObserver: Field '$field' - Old: '$oldStr' | New: '$newStr'");

            if ($oldStr !== $newStr) {
                $changes[$field] = [
                    'old' => $oldStr ?: 'N/A',
                    'new' => $newStr ?: 'N/A',
                ];
                Log::info("CompanyObserver: Change detected in field '$field'");
            }

        } catch (\Exception $e) {
            Log::error("CompanyObserver: Error processing field '$field': " . $e->getMessage());
        }
    }

    Log::info("CompanyObserver: Checked $checkedFields fields, found " . count($changes) . " changes");

    if (!empty($changes)) {
        Log::info('CompanyObserver: Changes detected, sending update email to: ' . $company->email);
        Log::info('CompanyObserver: Changes: ' . json_encode(array_keys($changes)));

        $profileLink = url('/company/' . $company->slug);

        try {
            Mail::to($company->email)->send(
                new CompanyProfileMail($company, $profileLink, $changes)
            );
            Log::info('CompanyObserver: Update email sent successfully');
        } catch (\Exception $e) {
            Log::error('CompanyObserver: Failed to send update email: ' . $e->getMessage());
        }
    } else {
        Log::info('CompanyObserver: No changes detected, skipping email');
    }
}


    /**
     * Get original relationship data for comparison
     */
    private function getOriginalRelationshipData(Company $company, string $relationName)
    {
        try {
            // Get the original model from database to compare relationships
            $originalCompany = Company::with($relationName)->find($company->id);
            
            if (!$originalCompany) {
                Log::warning("CompanyObserver: Could not find original company with ID: " . $company->id);
                return collect();
            }

            // Load the relationship from the original model
            return $originalCompany->$relationName;
        } catch (\Exception $e) {
            Log::error("CompanyObserver: Error getting original relationship data for '$relationName': " . $e->getMessage());
            return collect();
        }
    }

    /**
     * Normalize value for display in email
     */
    private function formatValue($field, $value)
    {
        try {
            // Handle Laravel Collections
            if ($value instanceof \Illuminate\Support\Collection) {
                $value = $value->toArray();
            }

            // Handle business_types relation
            if ($field === 'business_types' && !empty($value)) {
                if (is_array($value) || $value instanceof \Illuminate\Support\Collection) {
                    return implode(', ', collect($value)->map(function ($item) {
                        if (is_array($item)) {
                            return $item['name'] ?? '';
                        } elseif (is_object($item)) {
                            return $item->name ?? '';
                        }
                        return '';
                    })->filter()->all());
                }
            }

            // Handle categories relation
            if ($field === 'categories' && !empty($value)) {
                if (is_array($value) || $value instanceof \Illuminate\Support\Collection) {
                    return implode(', ', collect($value)->map(function ($item) {
                        if (is_array($item)) {
                            return $item['name'] ?? '';
                        } elseif (is_object($item)) {
                            return $item->name ?? '';
                        }
                        return '';
                    })->filter()->all());
                }
            }

            // Handle boolean-like fields
            $boolFields = ['active', 'show_products', 'show_profiles', 'newsletter_sponser', 'sponser'];
            if (in_array($field, $boolFields)) {
                return $value ? 'Yes' : 'No';
            }

            // Handle arrays (non-relationship)
            if (is_array($value)) {
                return implode(', ', array_filter($value));
            }

            // Handle null or empty
            if ($value === null || $value === '') {
                return 'N/A';
            }

            return (string) $value;
        } catch (\Exception $e) {
            Log::error("CompanyObserver: Error formatting value for field '$field': " . $e->getMessage());
            return 'Error formatting value';
        }
    }
}