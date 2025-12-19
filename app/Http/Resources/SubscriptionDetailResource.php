<?php

namespace App\Http\Resources;

use App\Enums\SubscriptionStatus;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Carbon;
use JetBrains\PhpStorm\ArrayShape;

class SubscriptionDetailResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    #[ArrayShape(['id' => 'mixed', 'user_id' => 'mixed', 'subscription_ids' => 'mixed', 'free_trial' => 'mixed', 'status' => 'mixed', 'expiry_date' => 'null|string', 'created_at' => 'mixed', 'updated_at' => 'mixed'])]
    public function toArray(Request $request): array
    {

        // Get the authenticated user's subscriptions
        $subscriptions = Auth::user()->subscriptions()
            ->whereIn('status', [SubscriptionStatus::ACTIVE, SubscriptionStatus::ABOUT_EXPIRE]) // Example condition: Only include active subscriptions
            ->get(); // Retrieve the filtered subscriptions

        // Find the latest expiry date from the subscriptions
        $latestExpiryDate = $subscriptions->max('pivot.expire_at');

        // Convert latestExpiryDate to a Carbon instance and format it
        $formattedExpiryDate = $latestExpiryDate ? Carbon::parse($latestExpiryDate)->format('Y-m-d H:i:s') : null;

        return [
            'id' => $this->resource->id,
            'user_id' => $this->resource->user_id,
            'subscription_ids' => $this->resource->subscription_ids,
            'free_trial' => $this->resource->free_trial,
            'package_id' => $this->resource->package_id,
            'status' => $this->resource->status,
            'expiry_date' => $formattedExpiryDate,
            'created_at' => $this->resource->created_at->toIso8601String(),
            'updated_at' => $this->resource->updated_at->toIso8601String(),
        ];
    }
}
