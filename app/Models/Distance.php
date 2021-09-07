<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Distance extends Model
{
    use HasFactory;

    protected $table = 'distance';
    public $timestamps = false;
    protected $fillable = ['id', 'lengths_json'];

    // this function to calculate distance between location and stop, and return a distance (float)
    // to use this function : Distance::Length(param1,param2)
    public function getLengthAttribute($from_stop_id, $to_stop_id) {
        if ($from_stop_id == $to_stop_id) return 0; // 0 length if both id's are the same
        $distance = Distance::where('id', '=', $from_stop_id)->first();
        foreach (json_decode($distance->lengths_json) as $value) {
            if ($value->to_stop_id == $to_stop_id) {
                return $value->length;
            }
        }
    }

}
