<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class CompanyResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->resource->id,
            'user_id' => $this->resource->user_id,
            'company_name' => $this->resource->company_name,
            'gst' => $this->resource->gst,
            'banner' => $this->resource->banner,
            'logo' => $this->resource->logo,
            'brand' => $this->resource->brand,
            'summary' => $this->resource->summary,
            'address_line_1' => $this->resource->address_line_1,
            'address_line_2' => $this->resource->address_line_2,
            'city_id' => $this->resource->city_id,
            'state_id' => $this->resource->state_id,
            'pincode' => $this->resource->pincode,
            'landline_1' => $this->resource->landline_1,
            'landline_2' => $this->resource->landline_2,
            'fax' => $this->resource->fax,
            'email' => $this->resource->email,
            'website_url' => $this->resource->website_url,
            'insta_url' => $this->resource->insta_url,
            'twitter_x_url' => $this->resource->twitter_x_url,
            'facebook_url' => $this->resource->facebook_url,
            'contact_person' => $this->resource->contact_person,
            'mobile' => $this->resource->mobile,
            'contact_person_landline' => $this->resource->contact_person_landline,
            'display_number' => $this->resource->display_number,
            'owner_1' => $this->resource->owner_1,
            'owner_phone_1' => $this->resource->owner_phone_1,
            'owner_2' => $this->resource->owner_2,
            'owner_phone_2' => $this->resource->owner_phone_2,
            'product_details' => $this->resource->product_details,
            'age_group' => $this->resource->age_group,
            'price' => $this->resource->price,
            'establishment_year' => $this->resource->establishment_year,
            'yearly_turnover' => $this->resource->yearly_turnover,
            'export_area_present' => $this->resource->export_area_present,
            'export_area_rqrd' => $this->resource->export_area_rqrd,
            'agent_distributors_rqrd' => $this->resource->agent_distributors_rqrd,
            'newspapers' => $this->resource->newspapers,
            'news_channels' => $this->resource->news_channels,
            'festive_period' => $this->resource->festive_period,
            'special_comments' => $this->resource->special_comments,
            'display_order' => $this->resource->display_order,
            'show_profiles' => $this->resource->show_profiles,
            'show_products' => $this->resource->show_products,
            'active' => $this->resource->active,
            'business_types' => $this->resource->business_types,
            'categories' => UserSubscriptionResource::collection($this->categories),
            'faqs' => FaqResource::collection($this->faqs),
            'news' => $this->resource->news,
            'videos' => $this->resource->videos,
            'sponser' => $this->resource->sponser,
            'verification_requests' => $this->verificationRequest,
        ];
    }
}
