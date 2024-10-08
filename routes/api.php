<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CityController;
use App\Http\Controllers\DistrictController;
use App\Http\Controllers\ProvinceController;
use App\Http\Controllers\PostalCodeController;

Route::prefix('v1')->group(function () {

    // Provinces
    Route::get('/provinces', [ProvinceController::class, 'getAllProvinces']);
    Route::get('/provinces/get-districts/{province}', [ProvinceController::class, 'getAllDistrictsInProvince']);
    Route::get('/provinces/get-cities/{province}', [ProvinceController::class, 'getAllCitiesInProvince']);

    // Districts
    Route::get('/districts', [DistrictController::class, 'getAllDistricts']);
    Route::get('/districts/get-cities/{district}', [DistrictController::class, 'getAllCitiesInDistrict']);
    Route::get('/districts/get-province/{district}', [DistrictController::class, 'getProvinceofDistrict']);

    // Cities
    Route::get('/cities', [CityController::class, 'getAllCities']);
    Route::get('/cities/get-district/{city}', [CityController::class, 'getDistrictofCity']);
    Route::get('/cities/get-province/{city}', [CityController::class, 'getProvinceofCity']);

    // Postal Codes
    Route::get('/postal-codes', [PostalCodeController::class, 'getAllPostalCodes']);
    Route::get('/postal-codes/get-post-office/{postal_code}', [PostalCodeController::class, 'getPostOfficeofPostalCode']);
    Route::get('/postal-codes/get-postal-code/{postal_office_name}', [PostalCodeController::class, 'getPostalCodeofPostalOffice']);
});
