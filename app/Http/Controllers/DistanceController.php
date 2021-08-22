<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class DistanceController extends Controller
{
    public function getAllLocations() {
        $locations = Http::get('https://distance.geoportail.lu/stops/');
        //return $locations->json();
        return view('locations', ['locations'=>$locations['records']]);
    }

    public function getAllLocationsSingle() {
        $locations = Http::get('https://distance.geoportail.lu/stops/');
        //return $locations->json();
        return view('locations-single', ['locations'=>$locations['records']]);
    }
}
