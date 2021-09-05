<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $company = array(
            array('id' => '1','company_name' => 'immotop','address' => 'lorem ipsum','city' => 'belval','zip_code' => '3455','phone' => '222222222','email' => 'lorem@gmail.com','created_at' => NULL,'updated_at' => NULL),
            array('id' => '2','company_name' => 'second company','address' => 'lol','city' => 'wiltz','zip_code' => '3422','phone' => '88888888','email' => 'company@gmail.com','created_at' => NULL,'updated_at' => NULL)
          );
          DB::table('company')->insert($company);

    }
}
