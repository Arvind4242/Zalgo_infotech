<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class PackageResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'tagline' => $this->tagline,
            'pricing' => $this->pricing,
            'validity_period' => $this->validity_period,
            'product_limit' => $this->product_limit,
            'company_field_toggles' => $this->company_field_toggles,
            'description' => $this->description_raw,
            'display_order' => $this->display_order,
        ];
    }
}
