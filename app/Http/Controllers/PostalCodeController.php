<?php

namespace App\Http\Controllers;

use App\Models\PostalCode;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Resources\PostalCodeResource;

class PostalCodeController extends Controller
{
    /**
     * @OA\Get(
     *     path="/postal-codes",
     *     summary="Get list of postal codes",
     *     tags={"Postal Codes"},
     *     @OA\Response(
     *         response=200,
     *         description="Successful response",
     *     ),
     * )
    */
    public function getAllPostalCodes()
    {
        $postalCodes = PostalCode::all();
        return PostalCodeResource::collection($postalCodes);
    }

    /**
     * @OA\Get(
     *     path="/postal-codes/get-post-office/{postal_code}",
     *     summary="Get post office of postal code",
     *     tags={"Postal Codes"},
     *     @OA\Parameter(
     *         name="postal_code",
     *         in="path",
     *         required=true,
     *         description="Postal Code of the Post Office",
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
    public function getPostOfficeofPostalCode(PostalCode $postal_code)
    {
        $postOffice = $postal_code->post_office_name;
        return response()->json(['post_office_name' => $postOffice], 200);
    }

    /**
     * @OA\Get(
     *     path="/postal-codes/get-postal-code/{postal_office_name}",
     *     summary="Get postal code of postal office",
     *     tags={"Postal Codes"},
     *     @OA\Parameter(
     *         name="postal_office_name",
     *         in="path",
     *         required=true,
     *         description="Post Office Name of the Postal Code",
     *         @OA\Schema(
     *             type="string"
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
    public function getPostalCodeOfPostalOffice($postal_office_name)
    {
        // Clean the input name by removing parenthesis and trimming the string
        $cleaned_name = preg_replace('/\([^)]+\)/', '', $postal_office_name);
        $cleaned_name = trim(strtolower($cleaned_name));

        // Fetch postal codes by matching the cleaned name
        $postalCodes = DB::table('postal_codes')
            ->select('post_office_name', 'postal_code')
            ->whereRaw('LOWER(TRIM(post_office_name)) LIKE ?', ["%$cleaned_name%"])
            ->get();

        // Check if postal codes were found and return appropriate response
        if ($postalCodes->isNotEmpty()) {
            return response()->json($postalCodes);
        } else {
            return response()->json([
                'message' => 'Not found'
            ], 404);
        }
    }

}
