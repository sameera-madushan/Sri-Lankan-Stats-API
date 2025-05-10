<?php

namespace App\Http\Controllers;

use App\Models\City;
use Illuminate\Http\Request;
use App\Http\Resources\CityResource;
use App\Http\Resources\DistrictResource;
use App\Http\Resources\ProvinceResource;

class CityController extends Controller
{
    /**
     * @OA\Get(
     *     path="/cities",
     *     summary="Get list of cities",
     *     tags={"Cities"},
     *     security={{"sanctum": {}}},
     *     @OA\Response(
     *         response=200,
     *         description="Successful response",
     *     ),
     * )
    */
    public function getAllCities()
    {
        $cities = City::all();
        return CityResource::collection($cities);
    }

    /**
     * @OA\Get(
     *     path="/cities/get-district/{city}",
     *     summary="Get district of a city",
     *     tags={"Cities"},
     *     security={{"sanctum": {}}},
     *     @OA\Parameter(
     *         name="city",
     *         in="path",
     *         required=true,
     *         description="The ID of the city",
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
    public function getDistrictofCity(city $city)
    {
        $district = $city->district;
        return new DistrictResource($district);
    }

    /**
     * @OA\Get(
     *     path="/cities/get-province/{city}",
     *     summary="Get province of a city",
     *     tags={"Cities"},
     *     security={{"sanctum": {}}},
     *     @OA\Parameter(
     *         name="city",
     *         in="path",
     *         required=true,
     *         description="The ID of the city",
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
    public function getProvinceofCity(city $city)
    {
        $province = $city->district->province;
        return new ProvinceResource($province);
    }

}
