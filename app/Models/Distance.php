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

    public function getLengthAttribute($from_stop_id, $to_stop_id) {
<<<<<<< Updated upstream
        if($from_stop_id == $to_stop_id) return 0; // 0 length if both id's are the same
=======
        if ($from_stop_id == $to_stop_id) return 0; // 0 length if both id's are the same
>>>>>>> Stashed changes
        $distance = Distance::where('id', '=', $from_stop_id)->first();
        foreach (json_decode($distance->lengths_json) as $value) {
            if ($value->to_stop_id == $to_stop_id) {
                return $value->length;
            }
        }
    }

}
