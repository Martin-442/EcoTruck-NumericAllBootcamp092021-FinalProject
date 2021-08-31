<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EquipmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $equipment = array(
            array('id' => '1','truck_type' => 'truck1','brand' => 'iveco','model' => 's1','year' => '2011','fuel' => 'Diesel','mileage' => '1111','truck_location' => 'dudelange','city' => 'dudelange','postal_code' => '1234','specification' => NULL,'created_at' => NULL,'updated_at' => NULL),
            array('id' => '2','truck_type' => 'truck2','brand' => 'mercedes','model' => 's2','year' => '2011','fuel' => 'Diesel','mileage' => '200000','truck_location' => 'bettembourg','city' => 'bettembourg','postal_code' => '1233','specification' => NULL,'created_at' => NULL,'updated_at' => NULL),
            array('id' => '3','truck_type' => 'truck3','brand' => 'theBrand','model' => 'lorem1','year' => '2015','fuel' => 'Petrol','mileage' => '1000000','truck_location' => 'luxembourg','city' => 'luxembourg','postal_code' => '9888','specification' => NULL,'created_at' => NULL,'updated_at' => NULL),
            array('id' => '4','truck_type' => 'truck4','brand' => 'iveco','model' => 'lorem','year' => '2017','fuel' => 'Diesel','mileage' => '2000000','truck_location' => 'dudelange','city' => 'dudelange','postal_code' => '3455','specification' => NULL,'created_at' => NULL,'updated_at' => NULL)
          );

          DB::table('equipment')->insert($equipment);
          
    }
}
