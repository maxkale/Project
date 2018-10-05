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
            'email' => 'kalemaxr@gmail.com',
            'password' => '$2y$10$A65/hXoXl2LlGfb3JKcd.uapK0T3jKZvITKn3C4RXcp/LXS2TAhsO',
        ]);
    }

}
