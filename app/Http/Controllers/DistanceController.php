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

    // the parameters that this function take are:
    // $cs = id of construction site
    //$tl= array of id's of truck location
    //$dy=array of id of dump yard's location
    public function getRoundTripArray($cs,$tl,$dy) {
        $amountTL=count($tl);
        $amountDY=count($dy);
        
    
        $TLdata = array();
        $DYdata = array();

       // $CS_id_tmp = rand(1,985);
        $CSdata = [
            "id" => $cs,
            "name" => $this->getLocationName($cs)
        ];
        //$DY = array();
       /* for ($d=1; $d < $amount; $d++) { // Yard locations
            $DY_id_tmp = rand(1,985);
         }*/

        $roundtrip = array();
        $t=0;
        $d=0;
        foreach ($tl as $truck_location) { // Truck locations
            //$TL_id_tmp = rand(1,985);
            $TLdata[$t] = [
                "id" => $truck_location,
                "name" => $this->getLocationName($truck_location)
            ];
            foreach ($dy as $dump_location)  { // Yard locations
                $DYdata[$d] = [
                    "id" => $dump_location,
                    "name" => $this->getLocationName($dump_location)
                ];
    
                $roundtrip[] = [
                    "TL" => $tl[$t],
                    "CS" => $cs,
                    "DY" => $dy[$d],
                    "length" =>
                        $this->getDistance($TLdata[$t]['id'], $CSdata['id']) +
                        // Distance::length($TLdata[$t]['id'], $CSdata['id'])
                        $this->getDistance($CSdata['id'], $DYdata[$d]['id']) +
                        $this->getDistance($DYdata[$d]['id'], $TLdata[$t]['id'])
                ];
            }
        }
        $length = array_column($roundtrip, 'length');

        array_multisort($length, SORT_ASC, $roundtrip);
        $csName=STOP::select('stop')->where('id','=',$roundtrip[0]['CS'])->get();
        $dyName=STOP::select('stop')->where('id','=',$roundtrip[0]['DY'])->get();
        $tlName=STOP::select('stop')->where('id','=',$roundtrip[0]['TL'])->get();
        $distance=round($roundtrip[0]['length'],2);
       
        $itinerary = [$csName[0],$dyName[0],$tlName[0],$distance];
        
        return $itinerary;
        //return view('dev.distance-json', ['distance'=> $distance]);
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
