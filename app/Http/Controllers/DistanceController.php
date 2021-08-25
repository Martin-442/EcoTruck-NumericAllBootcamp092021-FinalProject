<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class DistanceController extends Controller
{
    // tmp dev function
    public function getAllLocations() {
        $locations = Http::get('https://distance.geoportail.lu/stops/');
        //return $locations->json();
        return view('dev.locations', ['locations'=>$locations['records']]);
    }
    // tmp dev function
    public function getAllLocationsSingle() {
        $locations = Http::get('https://distance.geoportail.lu/stops/');
        //return $locations->json();
        return view('dev.locations-single', ['locations'=>$locations['records']]);
    }
    // tmp dev function
    public function getAllLocationIds() {
        $locations = Http::get('https://distance.geoportail.lu/stops/');
        return view('dev.locations-ids', ['locations'=>$locations['records']]);
    }
}
