<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = array(
            array('id' => '1','first_name' => 'admin','last_name' => 'admin','city' => 'belval','postal_code' => '1234','role' => 'Admin','email' => 'admin@gmail.com','email_verified_at' => '2021-09-01 13:08:13','password' => '$2y$10$Xq5IjT/gTNk7EMU.XWGhCO3aZ64b0vsVAbphY2eoGPhqXiVApgxOm','company_id' => '','remember_token' => 'JDRsniMVyFMyu80hAfQ7D1AXXQwCMwYmr9Qi5x6jhn9zTGQDoDtqwkBHwJj3','created_at' => '2021-08-30 12:57:12','updated_at' => '2021-09-02 07:29:32'),
            array('id' => '2','first_name' => 'provider','last_name' => 'p','city' => 'belval','postal_code' => '1234','role' => 'Provider','email' => 'provider@gmail.com','email_verified_at' => '2021-09-05 12:52:17','password' => '$2y$10$TJQjeaQqLn03TeP6R8m7buU4Ma0fqlSO3LAWTUkyxC/zwL.VNgJfq','company_id' => '','remember_token' => NULL,'created_at' => '2021-08-30 12:57:33','updated_at' => '2021-09-05 12:52:17'),
            array('id' => '3','first_name' => 'Contractor','last_name' => 'C','city' => 'belval','postal_code' => '1234','role' => 'Contractor','email' => 'contractor@gmail.com','email_verified_at' => '2021-09-05 12:55:02','password' => '$2y$10$DPYEGY7RpoZcZY83G756JOo/VtD90MZ8SPvRYD4nVQi8T.KYMqYoq','company_id' => '','remember_token' => NULL,'created_at' => '2021-08-30 12:57:59','updated_at' => '2021-09-05 12:55:02'),
            array('id' => '7','first_name' => 'P First','last_name' => 'P Last','city' => NULL,'postal_code' => NULL,'role' => 'Provider','email' => 'provider@example.com','email_verified_at' => '2021-09-05 14:41:31','password' => '$2y$10$e4QoByJuEdISJwkXjXOa.OnPiRUWIMHVIOIENfZ4YJ0hhJduCJWpW','company_id' => '6134baf1a350a','remember_token' => NULL,'created_at' => '2021-09-05 14:41:21','updated_at' => '2021-09-05 14:41:31'),
            array('id' => '8','first_name' => 'C First','last_name' => 'C Last','city' => NULL,'postal_code' => NULL,'role' => 'Contractor','email' => 'contractor@example.com','email_verified_at' => '2021-09-05 14:43:16','password' => '$2y$10$R31tzVQXKmB0IMJJoUN4COms/eK90ZXPcSyBKD10VopSbSOHsQjH.','company_id' => '6134bb5c01c53','remember_token' => NULL,'created_at' => '2021-09-05 14:43:08','updated_at' => '2021-09-05 14:43:16')
        );

        // all passwords set to aaaaaaaa

        DB::table('users')->insert($users);

        // php artisan migrate:fresh --seed
    }
}
