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
            array('id' => '1','company_id' => '6134bb5c01c53','truck_type' => 'Dump Truck','brand' => 'iveco','model' => 's1','year' => '2011','fuel' => 'Diesel','mileage' => '1111','truck_location' => 'dudelange','city' => 'dudelange','postal_code' => '1234','specification' => '','created_at' => '2021-08-30 12:57:33','updated_at' => '2021-08-30 12:57:33'),
            array('id' => '2','company_id' => '6134bb5c01c53','truck_type' => 'Dump Truck','brand' => 'mercedes','model' => 's2','year' => '2011','fuel' => 'Diesel','mileage' => '200000','truck_location' => 'bettembourg','city' => 'bettembourg','postal_code' => '1233','specification' => '','created_at' => '2021-08-30 12:57:33','updated_at' => '2021-08-30 12:57:33'),
            array('id' => '3','company_id' => '6134bb5c01c53','truck_type' => 'Dump Truck','brand' => 'theBrand','model' => 'lorem1','year' => '2015','fuel' => 'Petrol','mileage' => '1000000','truck_location' => 'luxembourg','city' => 'luxembourg','postal_code' => '9888','specification' => '','created_at' => '2021-08-30 12:57:33','updated_at' => '2021-08-30 12:57:33'),
            array('id' => '4','company_id' => '6134bb5c01c53','truck_type' => 'Dump Truck','brand' => 'iveco','model' => 'lorem','year' => '2017','fuel' => 'Diesel','mileage' => '2000000','truck_location' => 'dudelange','city' => 'dudelange','postal_code' => '3455','specification' => '','created_at' => '2021-08-30 12:57:33','updated_at' => '2021-08-30 12:57:33')
          );

          DB::table('equipment')->insert($equipment);

    }
}
