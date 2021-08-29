<?php

namespace Database\Seeders;

use App\Models\Distance;
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

        // total amount locations for LU: 985 (see stop DB)
        for ($i=1; $i <= 985; $i++) {
            // https://kaixersoft.wordpress.com/2015/05/19/how-to-use-laravel-eloquent-orm-to-do-a-replace-into/
            $distance = Distance::firstOrNew( ['id' => $i] );
            $distance->id = $i;
            $file = 'database/seeders/data/distance'.sprintf('%03d', $i).'.json';
            $distance->lengths_json = file_get_contents($file);
            $distance->save();
        }

        // php artisan migrate:fresh --seed

    }
}
