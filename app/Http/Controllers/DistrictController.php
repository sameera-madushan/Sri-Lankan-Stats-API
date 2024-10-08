<?php

namespace App\Http\Controllers;

use App\Models\District;
use Illuminate\Http\Request;
use App\Http\Resources\CityResource;
use App\Http\Resources\DistrictResource;
use App\Http\Resources\ProvinceResource;

class DistrictController extends Controller
{
    /**
     * @OA\Get(
     *     path="/districts",
     *     summary="Get list of districts",
     *     tags={"Districts"},
     *     @OA\Response(
     *         response=200,
     *         description="Successful response",
     *     ),
     * )
    */
    public function getAllDistricts()
    {
        $provinces = District::all();
        return DistrictResource::collection($provinces);
    }

    /**
     * @OA\Get(
     *     path="/districts/get-cities/{district}",
     *     summary="Get all cities in a district",
     *     tags={"Districts"},
     *     @OA\Parameter(
     *         name="district",
     *         in="path",
     *         required=true,
     *         description="The ID of the district",
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
    public function getAllCitiesInDistrict(District $district)
    {
        $cities = $district->cities;
        return CityResource::collection($cities);
    }

    /**
     * @OA\Get(
     *     path="/districts/get-province/{district}",
     *     summary="Get province of a district",
     *     tags={"Districts"},
     *     @OA\Parameter(
     *         name="district",
     *         in="path",
     *         required=true,
     *         description="The ID of the district",
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
    public function getProvinceofDistrict(District $district)
    {
        $province = $district->province;
        return new ProvinceResource($province);
    }
}
