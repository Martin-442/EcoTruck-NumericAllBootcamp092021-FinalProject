<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Equipment extends Model
{
    use HasFactory;
    protected $fillable = [
        'truck_type',
        'brand',
        'model',
        'year',
        'fuel',
        'mileage',
        'capacity',
        'truck_location',
        'city'
    ];
}
