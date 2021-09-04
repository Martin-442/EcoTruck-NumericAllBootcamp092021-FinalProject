<?php

namespace App\Http\Controllers;

use App\Models\Distance;
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

    

    public function getMinDistance($cs,$truckInfo_array,$ds_id_array){
        $itineraries=array();
        foreach($truckInfo_array as $t_info){
            foreach($ds_id_array as $ds_id){
                $itineraries[]=[
                "truck_id"=> $t_info->truck_id,   
                "truck_loc_id" => $t_info->truck_loc_id,
                "CS_id" => $cs,
                "dump_loc_id" => $ds_id,
                "length" =>
                    $this->getDistance($t_info->truck_loc_id,$cs) +
                    $this->getDistance($cs, $ds_id) +
                    $this->getDistance($ds_id, $t_info->truck_loc_id)
            ];
            }
        }
        array_multisort( array_column($itineraries, "length"), SORT_ASC, $itineraries );
        $tlName=STOP::select('stop')->where('id','=',$itineraries[0]['truck_loc_id'])->get();
        $dyName=STOP::select('stop')->where('id','=',$itineraries[0]['dump_loc_id'])->get();
        $csName=$csName=STOP::select('stop')->where('id','=',$itineraries[0]['CS_id'])->get();
        $price=round($itineraries[0]['length'],0)*rand(3,7);
        $bestItinerary= (object)[
            "truck_id"=> $itineraries[0]['truck_id'],   
            "truck_loc_name" => $tlName[0]->stop,
            "truck_loc_id" => $itineraries[0]['truck_loc_id'],   
            "dump_loc_name" =>$dyName[0]->stop,   
            "dump_loc_id" => $itineraries[0]['dump_loc_id'],   
            "CS_name" => $csName[0]->stop,
            "CS_id" =>$itineraries[0]['CS_id'],
            "distance" =>round($itineraries[0]['length'],0),
            "price"=>$price,
        ];
        return $bestItinerary;

    }
    

    private function getDistance($from_stop_id, $to_stop_id) {
        $distance = Distance::where('id', '=', $from_stop_id)->first();
        foreach (json_decode($distance->lengths_json) as $value) {
            if ($value->to_stop_id == $to_stop_id) {
                return $value->length;
            }
        }
    }
    private function getLocationName($id) {
        $location = Stop::where('id', '=', $id)->first();
        return $location->stop_org;
    }

    private function getWebserviceGeoportalLength($api) {
        $api_get = Http::get($api);
        return $api_get;
    }



}
