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
    /**
     * @OA\Get(
     *     path="/provinces",
     *     summary="Get list of provinces",
     *     tags={"Provinces"},
     *     @OA\Response(
     *         response=200,
     *         description="Successful response",
     *     ),
     * )
    */
    public function getAllProvinces()
    {
        $provinces = Province::all();
        return ProvinceResource::collection($provinces);
    }

    /**
     * @OA\Get(
     *     path="/provinces/get-districts/{province}",
     *     summary="Get all district in a province",
     *     tags={"Provinces"},
     *     @OA\Parameter(
     *         name="province",
     *         in="path",
     *         required=true,
     *         description="The ID of the province",
     *         @OA\Schema(
     *             type="integer"
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="Successful response",
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="Not found",
     *     )
     * )
     */
    public function getAllDistrictsInProvince(Province $province){

        $districts = $province->district;
        return DistrictResource::collection($districts);
    }

    /**
     * @OA\Get(
     *     path="/provinces/get-cities/{province}",
     *     summary="Get all cities in a province",
     *     tags={"Provinces"},
     *     @OA\Parameter(
     *         name="province",
     *         in="path",
     *         required=true,
     *         description="The ID of the province",
     *         @OA\Schema(
     *             type="integer"
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="Successful response",
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="Not found",
     *     )
     * )
     */
    public function getAllCitiesInProvince(Province $province){

        $districts = $province->district()->with('cities')->get();
        $cities = $districts->pluck('cities')->flatten();
        return CityResource::collection($cities);
    }
}
