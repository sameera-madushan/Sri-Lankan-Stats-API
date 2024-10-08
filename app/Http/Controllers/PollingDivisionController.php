<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PollingDivision;
use App\Http\Resources\PollingDistrictResource;
use App\Http\Resources\PollingDivisionResource;

class PollingDivisionController extends Controller
{

    /**
     * @OA\Get(
     *     path="/polling-divisions",
     *     summary="Get list of polling divisions",
     *     tags={"Polling Divisions"},
     *     @OA\Response(
     *         response=200,
     *         description="Successful response",
     *     ),
     * )
    */
    public function getAllPollingDivisions()
    {
        $pollingDivisions = PollingDivision::all();
        return PollingDivisionResource::collection($pollingDivisions);
    }

    /**
     * @OA\Get(
     *     path="/polling-divisions/get-polling-district/{polling_division}",
     *     summary="Get polling district of a polling division",
     *     tags={"Polling Divisions"},
     *     @OA\Parameter(
     *         name="polling_division",
     *         in="path",
     *         required=true,
     *         description="The ID of the polling division",
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
    public function getPollingDistrictofPollingDivision(PollingDivision $pollingDivision)
    {
        $pollingDistrict = $pollingDivision->pollingDistrict;
        return new PollingDistrictResource($pollingDistrict);
    }
}
