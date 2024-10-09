<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class PollingDivisionResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'polling_division_id' => $this->id,
            'polling_division_name_en' => $this->name_en,
            'polling_division_name_si' => $this->name_si,
            'polling_division_name_ta' => $this->name_ta,
        ];
    }
}
