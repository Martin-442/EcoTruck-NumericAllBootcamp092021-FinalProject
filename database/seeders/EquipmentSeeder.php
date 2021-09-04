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
            array('id' => '1','truck_type' => NULL,'brand' => 'Mercedes_Benz','model' => 'Atego 1523','year' => '2019','fuel' => 'Diesel','mileage' => '25000','capacity' => '10','truck_location' => NULL,'city' => 'Esch-sur-Alzette','postal_code' => '4364','specification' => 'its very nice truck','created_at' => '2021-08-31 08:01:43','updated_at' => '2021-09-02 11:19:17'),
            array('id' => '2','truck_type' => 'Standard','brand' => 'CAT','model' => 'cat 200','year' => '2016','fuel' => 'Diesel','mileage' => '50000','capacity' => '14','truck_location' => NULL,'city' => 'Esch','postal_code' => '1234','specification' => 'new truck added on 12:39','created_at' => '2021-09-01 10:39:15','updated_at' => '2021-09-01 10:39:15'),
            array('id' => '10','truck_type' => 'Standard','brand' => 'CAT','model' => 'M2000','year' => '2016','fuel' => 'Diesel','mileage' => '16000','capacity' => '8','truck_location' => NULL,'city' => 'Esch','postal_code' => '1234','specification' => 'new truck added on 12:46','created_at' => '2021-09-01 10:46:06','updated_at' => '2021-09-01 10:46:06')
          );

        DB::table('equipment')->insert($equipment);
    }
}
