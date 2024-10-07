<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class CityResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [

            'city_name_en' => $this->name_en,
            'city_name_si' => $this->name_si,
            'city_name_ta' => $this->name_ta,
            'latitude' => $this->latitude,
            'longitude' => $this->longitude
        ];
    }
}
