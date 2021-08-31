<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dropoff extends Model
{
    use HasFactory;

    protected $table = 'dropoff';
    public $timestamps = false;
    protected $fillable = ['id', 'name', 'location_id', 'description'];

    // SetUp the type of relation
    public function location_id()
    {
        return $this->hasOne(Stop::class, 'location_id', 'id');
    }

}
