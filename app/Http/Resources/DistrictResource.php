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
            'district_id' => $this->id,
            'district_code_en' => $this->district_code_en,
            'district_code_si' => $this->district_code_si,
            'district_code_ta' => $this->district_code_ta,
            'district_name_en' => $this->name_en,
            'district_name_si' => $this->name_si,
            'district_name_ta' => $this->name_ta,
        ];
    }
}
