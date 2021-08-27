<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DistanceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        require_once('distance-data_1.php');
        DB::table('distance')->insert($distance);

/*         require_once('distance-data_2.php');
        DB::table('distance')->insert($distance);

        require_once('distance-data_3.php');
        DB::table('distance')->insert($distance);
 */
        // php artisan migrate:fresh --seed

    }
}
