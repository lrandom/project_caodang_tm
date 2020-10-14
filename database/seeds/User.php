<?php

use Illuminate\Database\Seeder;
use Faker\Generator;
use Illuminate\Support\Facades\DB;

class User extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run ()
    {
        //
        $faker = Faker\Factory::create();
        for ($i = 0; $i < 10; $i++) {
            DB::table('users')->insert([
                'name' => $faker->userName,
                'email' => $faker->unique()->email,
                'password' => Hash::make('12345678'),
                'level' => 1,
                'address' => $faker->address,
                'phone' => $faker->phoneNumber,
                'avatar' => $faker->name,
                'fullname' => $faker->name
            ]);
        }
    }
}
