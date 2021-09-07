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
        // $bookings = array(
        //     array('id' => '3','company_id' => '1','equipment_id' => '1','construction_site' => 'dudelange','dump_site' => 'wiltz','booking_date' => '2021-10-10','meter_reading' => NULL,'fuel_reading' => NULL,'rent_rate' => NULL,'created_at' => NULL,'updated_at' => NULL,'time' => '2021-10-10'),
        //     array('id' => '4','company_id' => '2','equipment_id' => '2','construction_site' => 'luxembourg','dump_site' => 'luxembourg','booking_date' => '2021-09-09','meter_reading' => NULL,'fuel_reading' => NULL,'rent_rate' => NULL,'created_at' => NULL,'updated_at' => NULL,'time' => '2021-10-10')
        //   );
        $bookings = array(
            array('id' => '1','company_id' => '1','equipment_id' => '2','construction_site_id' => '7','dump_site_id' => '421','truck_type' => 'Standard','booking_date' => '2021-09-16','meter_reading' => '38','fuel_reading' => NULL,'rent_rate' => NULL,'created_at' => '2021-09-03 19:02:11','updated_at' => '2021-09-03 19:02:11','description' => 'lorem ipsum
          gggg','time' => '09:00','price' => '152'),
            array('id' => '281','company_id' => '1','equipment_id' => '1','construction_site_id' => '1','dump_site_id' => '12','truck_type' => 'Standard','booking_date' => '2021-09-08','meter_reading' => '39','fuel_reading' => NULL,'rent_rate' => NULL,'created_at' => '2021-09-07 09:25:23','updated_at' => '2021-09-07 09:25:23','description' => 'ee','time' => '09:00','price' => '273'),
            array('id' => '282','company_id' => '1','equipment_id' => '1','construction_site_id' => '1','dump_site_id' => '12','truck_type' => 'Standard','booking_date' => '2021-09-08','meter_reading' => '39','fuel_reading' => NULL,'rent_rate' => NULL,'created_at' => '2021-09-07 09:29:34','updated_at' => '2021-09-07 09:29:34','description' => 'ee','time' => '09:00','price' => '156'),
            array('id' => '283','company_id' => '1','equipment_id' => '1','construction_site_id' => '1','dump_site_id' => '12','truck_type' => 'Standard','booking_date' => '2021-09-08','meter_reading' => '39','fuel_reading' => NULL,'rent_rate' => NULL,'created_at' => '2021-09-07 09:30:00','updated_at' => '2021-09-07 09:30:00','description' => 'ee','time' => '09:00','price' => '234'),
            array('id' => '284','company_id' => '1','equipment_id' => '1','construction_site_id' => '1','dump_site_id' => '12','truck_type' => 'Standard','booking_date' => '2021-09-08','meter_reading' => '39','fuel_reading' => NULL,'rent_rate' => NULL,'created_at' => '2021-09-07 09:31:53','updated_at' => '2021-09-07 09:31:53','description' => 'ee','time' => '09:00','price' => '234'),
            array('id' => '285','company_id' => '1','equipment_id' => '1','construction_site_id' => '1','dump_site_id' => '12','truck_type' => 'Standard','booking_date' => '2021-09-08','meter_reading' => '39','fuel_reading' => NULL,'rent_rate' => NULL,'created_at' => '2021-09-07 09:32:28','updated_at' => '2021-09-07 09:32:28','description' => 'ee','time' => '09:00','price' => '195'),
            array('id' => '286','company_id' => '1','equipment_id' => '1','construction_site_id' => '1','dump_site_id' => '12','truck_type' => 'Standard','booking_date' => '2021-09-26','meter_reading' => '39','fuel_reading' => NULL,'rent_rate' => NULL,'created_at' => '2021-09-07 09:34:01','updated_at' => '2021-09-07 09:34:01','description' => 'nnn','time' => '11:30','price' => '117'),
            array('id' => '287','company_id' => '1','equipment_id' => '1','construction_site_id' => '227','dump_site_id' => '12','truck_type' => 'Standard','booking_date' => '2021-09-26','meter_reading' => '33','fuel_reading' => NULL,'rent_rate' => NULL,'created_at' => '2021-09-07 09:37:33','updated_at' => '2021-09-07 09:37:33','description' => 'test','time' => '12:00','price' => '198')
          );
          DB::table('bookings')->insert($bookings);
          
    }
}
