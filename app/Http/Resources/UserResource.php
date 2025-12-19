<?php

namespace App\Http\Resources;

use App\Models\Company;
use App\Models\Package;
use App\Settings\WebSettings;
use Illuminate\Http\Request;
use App\Http\Resources\PackageResource;
use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {

        $settings = app(WebSettings::class);

        return [
            'id' => $this->resource->id,
            'name' => $this->resource->name,
            'email' => $this->resource->email,
            'mobile' => $this->resource->mobile,
            'avatar_url' => $this->resource->avatar_url,
            'company' => Company::with(['categories', 'business_types'])->whereUserId($this->resource->id)->first(),
            'settings' => $settings->toArray(),
            'subscription' => UserSubscriptionResource::collection($this->resource->subscriptions->where('pivot.status', 'active')),
            'subscriptionDetail' => new SubscriptionDetailResource($this->resource->subscriptionDetail),
            'package' =>PackageResource::collection(Package::all()),
            'profile' => [
                'company_profile' => $this->resource->getProfileCompletionPercentage(),
                'product' => $this->resource->getProductCompletionPercentage(),
            ],
            'verification' => ($this->resource->company) ? $this->resource->company->verificationRequest : (object) [],
            'free_trial_available' => $this->resource->free_trial_available,
            'social_login' => $this->resource->social_login,
        ];
    }
}
