<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use PharIo\Manifest\Email;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [

            "name" => "Hal Jordan",
            "email" => "Greenpilot@gmail.com",
            "password" => Hash::make('brightestdayOG')

            ],
            [

                "name" => "Diana Themis",
                "email" => "WonderHuman@gmail.com",
                "password" => Hash::make('ZeusSucks')

            ],
            [

                "name" => "Clark Kent",
                "email" => "FarmBoy@gmail.com",
                "password" => Hash::make('MSLane')

            ],
        ]);
    }
}
