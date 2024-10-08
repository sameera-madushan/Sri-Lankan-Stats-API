<?php

namespace App\Models;

use App\Models\PollingDivision;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PollingDistrict extends Model
{
    use HasFactory;

    public function pollingDivisions()
    {
        return $this->hasMany(PollingDivision::class, 'polling_district_id');
    }
}
