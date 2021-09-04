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
            array('id' => '1','first_name' => 'admin','last_name' => 'admin','city' => 'belval','postal_code' => '1234','role' => 'Admin','email' => 'admin@gmail.com','email_verified_at' => '2021-09-01 13:08:13','password' => '$2y$10$Xq5IjT/gTNk7EMU.XWGhCO3aZ64b0vsVAbphY2eoGPhqXiVApgxOm','remember_token' => 'QhoneV2Y3FDZXAhmIeQsYtceTttHtBlgqxjRVqkJiDiZ9jdiodKaLXpTnRR4','created_at' => '2021-08-30 12:57:12','updated_at' => '2021-09-02 07:29:32'),
            array('id' => '2','first_name' => 'provider','last_name' => 'p','city' => 'belval','postal_code' => '1234','role' => 'Provider','email' => 'provider@gmail.com','email_verified_at' => NULL,'password' => '$2y$10$TJQjeaQqLn03TeP6R8m7buU4Ma0fqlSO3LAWTUkyxC/zwL.VNgJfq','remember_token' => NULL,'created_at' => '2021-08-30 12:57:33','updated_at' => '2021-08-30 12:57:33'),
            array('id' => '3','first_name' => 'Contractor','last_name' => 'C','city' => 'belval','postal_code' => '1234','role' => 'Contractor','email' => 'contractor@gmail.com','email_verified_at' => NULL,'password' => '$2y$10$DPYEGY7RpoZcZY83G756JOo/VtD90MZ8SPvRYD4nVQi8T.KYMqYoq','remember_token' => NULL,'created_at' => '2021-08-30 12:57:59','updated_at' => '2021-08-30 12:57:59'),
            array('id' => '4','first_name' => 'Email','last_name' => 'Verification','city' => 'Belval','postal_code' => '1','role' => NULL,'email' => 'cordingmart+verify01@gmail.com','email_verified_at' => '2021-09-01 13:02:02','password' => '$2y$10$f5unYk7W9NtJYkQIJLrbi.Q36yqEKtZNOzVlcjN1w1Z8qzQA.7WEW','remember_token' => NULL,'created_at' => '2021-09-01 13:01:42','updated_at' => '2021-09-01 13:02:02')
          );

        // all passwords set to aaaaaaaa

        DB::table('users')->insert($users);

        // php artisan migrate:fresh --seed
    }
}
