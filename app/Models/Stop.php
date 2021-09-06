<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stop extends Model
{
    use HasFactory;

    protected $table = 'stop';
    public $timestamps = false;

    public function getFormArrayAttribute() {
        /*
            This array can be used to create complete form select for all locations
            https://laravelcollective.com/docs/6.x/html
            composer require laravelcollective/html
            Controller: $locations = new Stop(); $locations->FormArray;
            see: resources/views/dropoff/update.blade.php
        */
        return $this->all()->sortBy('stop', SORT_NATURAL | SORT_FLAG_CASE)->pluck('stop', 'id');
    }

    public function getPositionAttribute() {
        $random = rand(1,985);
        //return 'hello';
        return Stop::where('id', '=', $random)->first();
    }

    public function getTrkptAttribute($stopID) {
        // <trkpt lat="49.610193746014716" lon="6.113119125366208"/>
        $stop = Stop::where('id', '=', $stopID)->first();
        $trkpt = '<trkpt lat="'.$stop["LON_LL84"].'" lon="'.$stop["LAT_LL84"].'"/>';
        return $trkpt;
    }

    public function getWptAttribute($stopID) {
        // <wpt lat="49.61052744655663" lon="6.112394928932187">
        $stop = Stop::where('id', '=', $stopID)->first();
        $trkpt = '<wpt lat="'.$stop["LON_LL84"].'" lon="'.$stop["LAT_LL84"].'">';
        return $trkpt;
    }

}
