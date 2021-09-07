<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call(StopSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(DropoffSeeder::class);
        $this->call(EquipmentSeeder::class);
        $this->call(CompanySeeder::class);
        $this->call(DistanceSeeder::class);
    }
}
