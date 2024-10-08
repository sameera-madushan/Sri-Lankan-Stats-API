<?php

namespace App\Http\Controllers;

use App\Models\PollingDistrict;
use App\Http\Resources\PollingDistrictResource;
use App\Http\Resources\PollingDivisionResource;

class PollingDistrictController extends Controller
{
    /**
     * @OA\Get(
     *     path="/polling-districts",
     *     summary="Get list of polling districts",
     *     tags={"Polling Districts"},
     *     @OA\Response(
     *         response=200,
     *         description="Successful response",
     *     ),
     * )
    */
    public function getAllPollingDistricts()
    {
        $pollingDistricts = PollingDistrict::all();
        return PollingDistrictResource::collection($pollingDistricts);
    }

    /**
     * @OA\Get(
     *     path="/polling-districts/get-polling-divisions/{polling_district}",
     *     summary="Get all polling divisions in a polling district",
     *     tags={"Polling Districts"},
     *     @OA\Parameter(
     *         name="polling_district",
     *         in="path",
     *         required=true,
     *         description="The ID of the polling district",
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
    public function getPollingDivisionsofPollingDistrict(PollingDistrict $pollingDistrict)
    {
        $pollingDivisions = $pollingDistrict->pollingDivisions;
        return PollingDivisionResource::collection($pollingDivisions);
    }
}
