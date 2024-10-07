<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\Province;
use Illuminate\Http\Request;
use App\Http\Resources\CityResource;
use App\Http\Resources\DistrictResource;
use App\Http\Resources\ProvinceResource;

class ProvinceController extends Controller
{
    public function getAllProvinces()
    {
        $provinces = Province::all();
        return ProvinceResource::collection($provinces);
    }

    public function getAllDistrictsInProvince(Province $province){

        $districts = $province->district;
        return DistrictResource::collection($districts);
    }

    public function getAllCitiesInProvince(Province $province){

        $districts = $province->district()->with('cities')->get();
        $cities = $districts->pluck('cities')->flatten();
        return CityResource::collection($cities);
    }
}
