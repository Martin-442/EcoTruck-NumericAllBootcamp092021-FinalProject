<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $fillable = [
        'company_id',
        'equipment_id',
        'construction_site',
        'dump_site',
        'booking_date',
        'meter_reading',
        'fuel_reading',
        'rent_rate'
    ];
    public function equipment_id(){
        return $this->hasOne(Equipment::class,"id","equipment_id");// linking equipment.id with booking.equipment_id
    }
}
