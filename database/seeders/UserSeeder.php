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
<<<<<<< HEAD
=======

>>>>>>> main
        $users = array(
            array('id' => '1','first_name' => 'admin','last_name' => 'admin','city' => 'belval','postal_code' => '1234','role' => 'Admin','email' => 'admin@gmail.com','email_verified_at' => NULL,'password' => '$2y$10$dnnMhqjpdar/bb2qlbTr1OllH8nig7QuGWdGi1L8pREabCLQfS3yC','remember_token' => NULL,'created_at' => '2021-08-30 12:57:12','updated_at' => '2021-08-30 12:57:12'),
            array('id' => '2','first_name' => 'provider','last_name' => 'p','city' => 'belval','postal_code' => '1234','role' => 'Provider','email' => 'provider@gmail.com','email_verified_at' => NULL,'password' => '$2y$10$TJQjeaQqLn03TeP6R8m7buU4Ma0fqlSO3LAWTUkyxC/zwL.VNgJfq','remember_token' => NULL,'created_at' => '2021-08-30 12:57:33','updated_at' => '2021-08-30 12:57:33'),
            array('id' => '3','first_name' => 'Contractor','last_name' => 'C','city' => 'belval','postal_code' => '1234','role' => 'Contractor','email' => 'contractor@gmail.com','email_verified_at' => NULL,'password' => '$2y$10$DPYEGY7RpoZcZY83G756JOo/VtD90MZ8SPvRYD4nVQi8T.KYMqYoq','remember_token' => NULL,'created_at' => '2021-08-30 12:57:59','updated_at' => '2021-08-30 12:57:59')
        );

<<<<<<< HEAD
        DB::table('users')->insert($users);

        // php artisan migrate:fresh --seed

=======
        // all passwords set to aaaaaaaa

        DB::table('users')->insert($users);

        // php artisan migrate:fresh --seed
>>>>>>> main
    }
}
