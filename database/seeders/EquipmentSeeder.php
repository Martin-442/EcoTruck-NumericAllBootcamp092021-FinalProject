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
            array('id' => '1','company_id'=>'1','brand' => 'iveco','model' => 's1','truck_type' => 'Standard','year' => '2011','fuel' => 'Diesel','mileage' => '1111','capacity' => '100','truck_location' => 'dudelange','city' => 'dudelange','postal_code' => '1234','specification' => NULL,'created_at' => NULL,'updated_at' => NULL),
            array('id' => '2','company_id'=>'1','brand' => 'mercedes','model' => 's2','truck_type' => 'Dump Truck','year' => '2011','fuel' => 'Diesel','mileage' => '200000','capacity' => '200','truck_location' => 'wiltz','city' => 'wiltz','postal_code' => '1233','specification' => NULL,'created_at' => NULL,'updated_at' => NULL),
            array('id' => '3','company_id'=>'6','brand' => 'theBrand','model' => 'lorem1','truck_type' => 'Semi trailer','year' => '2015','fuel' => 'Petrol','mileage' => '1000000','capacity' => '250','truck_location' => 'luxembourg','city' => 'luxembourg','postal_code' => '9888','specification' => NULL,'created_at' => NULL,'updated_at' => NULL),
            array('id' => '4','company_id'=>'1','brand' => 'iveco','model' => 'lorem','truck_type' => 'Standard','year' => '2017','fuel' => 'Diesel','mileage' => '2000000','capacity' => '300','truck_location' => 'dudelange','city' => 'dudelange','postal_code' => '3455','specification' => NULL,'created_at' => NULL,'updated_at' => NULL)
          );
          DB::table('equipment')->insert($equipment);
          
    }
}
