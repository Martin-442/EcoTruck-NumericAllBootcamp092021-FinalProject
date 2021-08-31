<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $bookings = array(
            array('id' => '3','company_id' => '1','equipment_id' => '1','construction_site' => 'dudelange','dump_site' => 'wiltz','booking_date' => '2021-10-10','meter_reading' => NULL,'fuel_reading' => NULL,'rent_rate' => NULL,'created_at' => NULL,'updated_at' => NULL,'time' => '2021-10-10'),
            array('id' => '4','company_id' => '2','equipment_id' => '2','construction_site' => 'luxembourg','dump_site' => 'luxembourg','booking_date' => '2021-09-09','meter_reading' => NULL,'fuel_reading' => NULL,'rent_rate' => NULL,'created_at' => NULL,'updated_at' => NULL,'time' => '2021-10-10')
          );
          DB::table('bookings')->insert($bookings);
          
    }
}
