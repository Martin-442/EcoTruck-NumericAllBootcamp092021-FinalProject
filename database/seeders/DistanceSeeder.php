<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DistanceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $distances_lu = array(
        );


        DB::table('distance')->insert($distances_lu);

        // php artisan migrate:fresh --seed

    }
}
