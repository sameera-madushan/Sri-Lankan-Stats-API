<?php

namespace App\Models;

use App\Models\PollingDistrict;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PollingDivision extends Model
{
    use HasFactory;

    public function pollingDistrict()
    {
        return $this->belongsTo(PollingDistrict::class, 'polling_district_id');
    }
}
