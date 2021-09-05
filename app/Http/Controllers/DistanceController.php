<?php

namespace App\Http\Controllers;

use App\Models\Stop;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class DistanceController extends Controller
{
    // get Data from API
    public function getAllLocations() {
        $locations = Http::get('https://distance.geoportail.lu/stops/');
        //return $locations->json();
        return view('locations', ['locations'=>$locations['records']]);
    }

    public function getStopPosition() {
        $random = rand(1,985);
        $stop1 = Stop::where('id', '=', $random)->first();
        $random = rand(1,985);
        $stop2 = Stop::where('id', '=', $random)->first();
        $random = rand(1,985);
        $stop3 = Stop::where('id', '=', $random)->first();

        $stops = array([
            'Y_RECHTS' => $stop1->Y_RECHTS,
            'X_HOCH' => $stop1->X_HOCH,
            'stop' => $stop1->stop,
            'id' => $stop1->id
        ],[
            'Y_RECHTS' => $stop2->Y_RECHTS,
            'X_HOCH' => $stop2->X_HOCH,
            'stop' => $stop2->stop,
            'id' => $stop2->id
        ],[
            'Y_RECHTS' => $stop3->Y_RECHTS,
            'X_HOCH' => $stop3->X_HOCH,
            'stop' => $stop3->stop,
            'id' => $stop3->id
        ]);

        return view('geoportal', ['stops' => $stops]);
    }
}
