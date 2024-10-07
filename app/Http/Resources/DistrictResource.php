<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class DistrictResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'province_name_en' => $this->province->name_en,
            'province_name_si' => $this->province->name_si,
            'province_name_ta' => $this->province->name_ta,
            'district_code_en' => $this->district_code_en,
            'district_code_si' => $this->district_code_si,
            'district_code_ta' => $this->district_code_ta,
            'name_en' => $this->name_en,
            'name_si' => $this->name_si,
            'name_ta' => $this->name_ta,
        ];
    }
}
