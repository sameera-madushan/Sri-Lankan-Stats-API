<?php

namespace App\Http\Controllers;

use App\Models\Province;
use Illuminate\Http\Request;
use App\Http\Resources\ProvinceResource;

class ProvinceController extends Controller
{
    public function index()
    {
        $provinces = Province::all();
        return ProvinceResource::collection($provinces);
    }

    public function show(){

    }
}
