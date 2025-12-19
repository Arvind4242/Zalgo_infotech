<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Models\Company;

class CompanyProfileMail extends Mailable
{
    use Queueable, SerializesModels;

    public Company $company;
    public string $profileLink;
    public array $changes; // array of changed fields

    /**
     * @param Company $company
     * @param string $profileLink
     * @param array $changes Array of changed fields in format: ['field' => ['old' => 'value', 'new' => 'value']]
     */
    public function __construct(Company $company, string $profileLink, array $changes = [])
    {
        $this->company = $company;
        $this->profileLink = $profileLink;
        $this->changes = $changes;
    }

    public function build()
    {
        return $this->from('donotreply@indian-apparel.com', 'Indian-Apparel.com')
                    ->subject($this->changes ? 'Your Company Profile Has Been Updated' : 'Your Free Profile on Indian-Apparel.com – Verify & Update Today')
                    ->view('emails.company-profile')
                    ->with([
                        'company' => $this->company,
                        'profileLink' => $this->profileLink,
                        'changes' => $this->changes,
                    ]);
    }

    /**
     * Format field name for display
     */
    public function formatFieldName($field)
    {
        $fieldNames = [
            'company_name' => 'Company Name',
            'business_types' => 'Business Types',
            'categories' => 'Categories',
            'banner' => 'Banner',
            'logo' => 'Logo',
            'summary' => 'Summary',
            'gst' => 'GST Number',
            'brand' => 'Brand',
            'address_line_1' => 'Address Line 1',
            'address_line_2' => 'Address Line 2',
            'state_id' => 'State',
            'city_id' => 'City',
            'pincode' => 'Pincode',
            'landline_1' => 'Landline 1',
            'landline_2' => 'Landline 2',
            'email' => 'Email',
            'fax' => 'Fax',
            'protocol' => 'Protocol',
            'website_url' => 'Website URL',
            'twitter_x_url' => 'Twitter/X URL',
            'facebook_url' => 'Facebook URL',
            'insta_url' => 'Instagram URL',
            'linkedin_url' => 'LinkedIn URL',
            'contact_person' => 'Contact Person',
            'mobile' => 'Mobile',
            'contact_person_landline' => 'Contact Person Landline',
            'display_number' => 'Display Number',
            'owner_1' => 'Owner 1',
            'owner_2' => 'Owner 2',
            'owner_phone_1' => 'Owner Phone 1',
            'owner_phone_2' => 'Owner Phone 2',
            'product_details' => 'Product Details',
            'age_group' => 'Age Group',
            'price' => 'Price',
            'establishment_year' => 'Establishment Year',
            'yearly_turnover' => 'Yearly Turnover',
            'export_area_present' => 'Export Area Present',
            'export_area_rqrd' => 'Export Area Required',
            'newspapers' => 'Newspapers',
            'news_channels' => 'News Channels',
            'festive_period' => 'Festive Period',
            'special_comments' => 'Special Comments',
            'display_order' => 'Display Order',
            'user_id' => 'User ID',
            'show_profiles' => 'Show Profiles',
            'show_products' => 'Show Products',
            'agent_distributors_rqrd' => 'Agent/Distributors Required',
            'newsletter_sponser' => 'Newsletter Sponsor',
            'sponser' => 'Sponsor'
        ];

        return $fieldNames[$field] ?? ucfirst(str_replace('_', ' ', $field));
    }
}