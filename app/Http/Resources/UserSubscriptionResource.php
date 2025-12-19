<?php

namespace App\Http\Resources;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class UserSubscriptionResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'description' => $this->description,
            'url' => $this->url,
            'parent_id' => $this->parent_id,
            'image' => $this->image,
            'icon' => $this->icon,
            // 'price' => $this->price,
            'is_active' => $this->is_active,
            'free_trial' => $this->pivot->free_trail,
            'company_field_toggles' => $this->pivot->company_field_toggles,
            'product_limit' => $this->pivot->product_limit,
            'package_id' => $this->pivot->package_id,
            'expire_at' => $this->pivot->expire_at,
            'created_at' => (new Carbon($this->pivot->created_at))->format('Y-m-d h:i:s'),
            'status' => $this->pivot->status,

        ];
    }
}
