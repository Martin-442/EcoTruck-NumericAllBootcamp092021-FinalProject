<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $fillable = [
        'contractor_id',
        'equipment_id',
        'construction_site',
        'dump_site',
        'booking_date',
        'meter_reading',
        'fuel_reading',
        'rent_rate'
    ];
}
