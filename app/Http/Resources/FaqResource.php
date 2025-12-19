<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class FaqResource extends JsonResource
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
            'question' => $this->resource->question,
            'answer' => $this->resource->answer,
            'is_active' => $this->resource->is_active,
            'position' => $this->resource->position,
            'created_at' => $this->resource->created_at,
            'updated_at' => $this->resource->updated_at,
            'created_by' => $this->resource->created_by,
            'updated_by' => $this->resource->updated_by,
            'created_by_name' => $this->resource->creator->name,
            'updated_by_name' => $this->resource->editor->name,
        ];
    }
}
