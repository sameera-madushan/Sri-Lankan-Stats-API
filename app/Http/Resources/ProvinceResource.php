<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ProvinceResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'province_id' => $this->id,
            'province_name_en' => $this->name_en,
            'province_name_si' => $this->name_si,
            'province_name_ta' => $this->name_ta,
        ];
    }
}
