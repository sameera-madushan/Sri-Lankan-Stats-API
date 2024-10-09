<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class PollingDistrictResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'polling_district_id' => $this->id,
            'polling_district_name_en' => $this->name_en,
            'polling_district_name_si' => $this->name_si,
            'polling_district_name_ta' => $this->name_ta,
        ];
    }
}
