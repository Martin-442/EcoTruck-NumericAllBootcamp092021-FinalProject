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

    public function getStopPosition($tl = 5, $cs = 1, $dy = 5) {
        $gpx = '<gpx xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" version="1.1" xsi:schemaLocation="http://www.topografix.com/GPX/1/1 http://www.topografix.com/GPX/1/1/gpx.xsd" creator="geoportail.lu" xmlns="http://www.topografix.com/GPX/1/1">
';
        $gpxfile = uniqid();
        $stops = array();

        for ($i=0; $i < $tl; $i++) {
            $random = rand(1,985);
            $stop = Stop::where('id', '=', $random)->first();
            $stopsTL[$i] = ([
                'id' => $random,
                'icon' => '/media/truck-pickup-solid-small.png',
                'Y_RECHTS' => $stop->Y_RECHTS,
                'X_HOCH' => $stop->X_HOCH,
                'LON_LL84' => $stop->LON_LL84,
                'LAT_LL84' => $stop->LAT_LL84,
                'stop' => $stop->stop,
                'id' => $stop->id,
                'gpx' => $gpxfile.'.gpx',
                'batch' => $gpxfile,
                'trackpoint' => $this->getTrkptAttribute($stop->id)
            ]);
            $stops[] = $stopsTL[$i];

        }
        $random = rand(1,985);
        $stop = Stop::where('id', '=', $random)->first();
        $stopCS = ([
            'id' => $random,
            'icon' => '/media/home-solid-small.png',
            'Y_RECHTS' => $stop->Y_RECHTS,
            'X_HOCH' => $stop->X_HOCH,
            'LON_LL84' => $stop->LON_LL84,
            'LAT_LL84' => $stop->LAT_LL84,
            'stop' => $stop->stop,
            'id' => $stop->id,
            'gpx' => $gpxfile.'.gpx',
            'batch' => $gpxfile,
            'trackpoint' => $this->getTrkptAttribute($stop->id)
        ]);
        $stops[] = $stopCS;


        for ($i=0; $i < $dy; $i++) {
            $random = rand(1,985);
            $stop = Stop::where('id', '=', $random)->first();
            $stopsDY[$i] = ([
                'id' => $random,
                'icon' => '/media/mountain-solid-small.png',
                'Y_RECHTS' => $stop->Y_RECHTS,
                'X_HOCH' => $stop->X_HOCH,
                'LON_LL84' => $stop->LON_LL84,
                'LAT_LL84' => $stop->LAT_LL84,
                'stop' => $stop->stop,
                'id' => $stop->id,
                'gpx' => $gpxfile.'.gpx',
                'batch' => $gpxfile,
                'trackpoint' => $this->getTrkptAttribute($stop->id)
            ]);
            $stops[] = $stopsDY[$i];

        }


        foreach ($stopsTL as $stopTL) {
            foreach ($stopsDY as $stopDY) {
                $gpx .= '<trk>
    <trkseg>
';
                $gpx .= $this->getTrkptAttribute($stopTL['id']);
                $gpx .= $this->getTrkptAttribute($stopCS['id']);
                $gpx .= $this->getTrkptAttribute($stopDY['id']);
                $gpx .= $this->getTrkptAttribute($stopTL['id']);
                $gpx .= '   </trkseg>
</trk>
';
            }
        }
        // $gpx .= $this->getTrkptAttribute($stops[0]['id']);

        $gpx .= '</gpx>';
        file_put_contents('gpx/'.$gpxfile.'.gpx', $gpx);

        return view('geoportal', ['stops' => $stops]);
    }

    public function getTrkptAttribute($stopID) {
        // <trkpt lat="49.610193746014716" lon="6.113119125366208"/>
        $stop = Stop::where('id', '=', $stopID)->first();
        $trkpt = '      <trkpt lat="'.$stop["LAT_LL84"].'" lon="'.$stop["LON_LL84"].'"/>
';
        return $trkpt;
    }

    public function getWptAttribute($stopID) {
        // <wpt lat="49.61052744655663" lon="6.112394928932187">
        $stop = Stop::where('id', '=', $stopID)->first();
        $trkpt = '<wpt lat="'.$stop["LAT_LL84"].'" lon="'.$stop["LON_LL84"].'">
';
        return $trkpt;
    }


}
