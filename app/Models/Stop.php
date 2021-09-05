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
        return Stop::where('id', '=', '1')->first();
    }

}
