<?php

namespace App\Http\Controllers;

use App\Models\Distance;
use App\Models\Stop;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\DB;


class DistanceController extends Controller
{
    // tmp dev function - Distance Model on DB
    public function getAllLocations() {
        $locations = Http::get('https://distance.geoportail.lu/stops/');
        //return $locations->json();
        return view('dev.locations', ['locations'=>$locations['records']]);
    }
    // tmp dev function - Distance Model on DB
    public function getAllLocationsSingle() {
        $locations = Http::get('https://distance.geoportail.lu/stops/');
        //return $locations->json();
        return view('dev.locations-single', ['locations'=>$locations['records']]);
    }
    // tmp dev function - Distance Model on DB
    public function getAllLocationIds() {
        $locations = Http::get('https://distance.geoportail.lu/stops/');
        return view('dev.locations-ids', ['locations'=>$locations['records']]);
    }
    // tmp dev function - Distance Model on DB
    public function createFilesLoaclly($from_stop_id) {
        // $from_stop_id = 1;
        $distance = Distance::select('to_stop_id','length')->where('from_stop_id', $from_stop_id)->get();
        $file = 'data/distance'.sprintf('%03d', $from_stop_id).'.json';
        $content = $distance;
        file_put_contents($file, $content);
        return view('dev.distance-local', ['distances'=>$distance]);
    }
    // tmp dev function - Distance Model on DB
    public function createFileLoacllyBatch($from_stop_id=1) {
        DB::enableQueryLog();
        for ($i=850; $i <= $from_stop_id; $i++) {
            $distance = Distance::select('to_stop_id','length')->where('from_stop_id', '=', $i)->get();
            $file = 'data/distance'.sprintf('%03d', $i).'.json';
            $content = $distance;
            file_put_contents($file, $content);
            if ($i == 985) {
                // https://beyondco.de/blog/how-to-get-the-raw-sql-query-from-the-laravel-query-builder
                dd(DB::getQueryLog());
            }
        }
        return view('dev.distance-local', ['distances'=>$distance]);
    }

    // tmp dev function - on new distance migration table (incl. JSON)
    public function addJsonToStop($from_stop_id=1) {
        for ($i=1; $i <= $from_stop_id; $i++) {
            // https://kaixersoft.wordpress.com/2015/05/19/how-to-use-laravel-eloquent-orm-to-do-a-replace-into/
            $distance = Distance::firstOrNew( ['id' => $i] );
            $distance->id = $i;
            $file = 'data/distance'.sprintf('%03d', $i).'.json';
            $distance->lengths_json = file_get_contents($file);
            $distance->save();
        }
        return view('dev.distance-json', ['distances'=>$from_stop_id]);
    }


    public function readFromJson($from_stop_id, $to_stop_id) {
        $from_db = $this->getLocationName($from_stop_id);
        $to_db = $this->getLocationName($to_stop_id);

        // https://distance.geoportail.lu/webservice/Luxembourg:Esch-sur-Alzette
        $api = 'https://distance.geoportail.lu/webservice/'.$from_db.':'.$to_db; //.'?format=json';
        $api_response = $this->getWebserviceGeoportalLength($api)->json();

        $distance = [
            "db_from" => $from_db,
            "db_to" => $to_db,
            "db_length" => $this->getDistance($from_stop_id, $to_stop_id),
            "api" => $api,
            "api_response" => $api_response['calculated']
        ];
        return view('dev.distance-json', ['distance'=> $distance]);
    }

    public function testLogic($amount) {
        $TL = array();
        $CS_id_tmp = rand(1,985);
        $CS = [
            "id" => $CS_id_tmp,
            "name" => $this->getLocationName($CS_id_tmp)
        ];
        $DY = array();
        for ($d=1; $d < $amount; $d++) { // Yard locations
            $DY_id_tmp = rand(1,985);
            $DY[$d] = [
                "id" => $DY_id_tmp,
                "name" => $this->getLocationName($DY_id_tmp)
            ];
        }

        $roundtrip = array();
        for ($t=1; $t < $amount; $t++) { // Truck locations
            $TL_id_tmp = rand(1,985);
            $TL[$t] = [
                "id" => $TL_id_tmp,
                "name" => $this->getLocationName($TL_id_tmp)
            ];
            for ($d=1; $d < $amount; $d++) { // Yard locations
                $roundtrip[] = [
                    "TL" => $TL[$t],
                    "CS" => $CS,
                    "DY" => $DY[$d],
                    "length" =>
                        $this->getDistance($TL[$t]['id'], $CS['id']) +
                        $this->getDistance($CS['id'], $DY[$d]['id']) +
                        $this->getDistance($DY[$d]['id'], $TL[$t]['id'])
                ];
            }
        }
        $length = array_column($roundtrip, 'length');

        array_multisort($length, SORT_ASC, $roundtrip);
        $distance = $roundtrip;

        return view('dev.distance-json', ['distance'=> $distance]);
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
