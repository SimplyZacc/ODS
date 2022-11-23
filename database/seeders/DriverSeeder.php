<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DriverSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('drivers')->insert([[
            'fname' => 'Bob',
            'lname' => 'Smith',
            'email' => 'BSmith@Gmail.com',
            'telephone' => '2302302',
        ], [
            'fname' => 'Fred',
            'lname' => 'Drakes',
            'email' => 'FDrakes@Gmail.com',
            'telephone' => '4111111',
        ]]);
        
        DB::table('users')->insert([[
            'name' => 'admin',
            'email' => 'admin@test.com',
            'password' => Hash::make('12345678'),
            'role' => 'ODSAdministrator',
        ],[
            'name' => 'driver1',
            'email' => 'driver1@test.com',
            'password' => Hash::make('12345678'),
            'role' => 'driver',
        ],]);
    }
}
