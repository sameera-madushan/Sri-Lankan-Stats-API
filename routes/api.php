<?php

use App\Http\Controllers\DistrictController;
use App\Http\Controllers\ProvinceController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::prefix('v1')->group(function () {
    Route::apiResource('/provinces', ProvinceController::class)->only(['index', 'show']);
    Route::apiResource('/districts', DistrictController::class)->only(['index', 'show']);
});
