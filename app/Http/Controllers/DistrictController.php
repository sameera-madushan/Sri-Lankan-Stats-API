<?php

namespace App\Http\Controllers;

use App\Models\District;
use Illuminate\Http\Request;
use App\Http\Resources\CityResource;
use App\Http\Resources\DistrictResource;

class DistrictController extends Controller
{
    public function getAllDistricts()
    {
        $provinces = District::all();
        return DistrictResource::collection($provinces);
    }

    public function getAllCitiesInDistrict(District $district)
    {
        $cities = $district->cities;
        return CityResource::collection($cities);
    }
}
