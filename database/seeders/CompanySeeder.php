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
            array('id' => '1','company_name' => 'Company','address' => '5, Rue de Luxembourg','city' => 'Walferdange','zip_code' => '3535','phone' => '+443732839474','email' => 'test@example.com','created_at' => '2021-09-05 14:41:21','updated_at' => '2021-09-05 14:41:21'),
            array('id' => '6','company_name' => 'Company','address' => '5, Rue de Luxembourg','city' => 'Walferdange','zip_code' => '3535','phone' => '+443732839474','email' => 'test@example.com','created_at' => '2021-09-05 14:43:08','updated_at' => '2021-09-05 14:43:08')
        );
          DB::table('company')->insert($company);
          
    }
}
