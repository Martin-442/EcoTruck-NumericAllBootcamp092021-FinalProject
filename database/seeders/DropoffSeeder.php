<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DropoffSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dropoff = array(
            array('id' => '1','name' => 'Dump Yard 1','location_id' => '10','description' => 'All kinds of material'),
            array('id' => '2','name' => 'Dump Yard 2','location_id' => '235','description' => 'All kinds of material'),
            array('id' => '3','name' => 'Dump Yard 3','location_id' => '311','description' => 'All kinds of material'),
            array('id' => '4','name' => 'Dump Yard 4','location_id' => '425','description' => 'All kinds of material'),
            array('id' => '5','name' => 'Dump Yard 5','location_id' => '432','description' => 'All kinds of material'),
            array('id' => '6','name' => 'Dump Yard 6','location_id' => '521','description' => 'All kinds of material'),
            array('id' => '7','name' => 'Dump Yard 7','location_id' => '777','description' => 'All kinds of material'),
            array('id' => '8','name' => 'Dump Yard 8','location_id' => '782','description' => 'All kinds of material'),
            array('id' => '9','name' => 'Dump Yard 9','location_id' => '792','description' => 'All kinds of material'),
            array('id' => '10','name' => 'Dump Yard 10','location_id' => '820','description' => 'All kinds of material')
          );

          DB::table('dropoff')->insert($dropoff);

          // php artisan migrate:fresh --seed

    }
}
