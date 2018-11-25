<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        //
        DB::table('users')->insert([
            'first_name' => "Mahesh",
            'last_name' => "Kale",
            'country_id' => "101",
            'state_id' => "22",
            'city_id' => "2785",
            'pin_code' => "422605",
            'address' => "A/p Dhandarphal Bk Sangamner",
            'email' => 'kalemaxr@gmail.com',
            'mobile_number' => '8928897475',
            'password' => '$2y$10$A65/hXoXl2LlGfb3JKcd.uapK0T3jKZvITKn3C4RXcp/LXS2TAhsO',
        ]);
    }

}
