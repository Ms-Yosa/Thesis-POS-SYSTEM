<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;


class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Juan',
            'last_name' => 'Dela Cruz',
            'email' => 'admin@gmail.com',
            'role' => 'admin',
            'phone_number' => '09887665543',
            'password' => Hash::make('password'),
        ]);

        DB::table('users')->insert([
            'name' => 'John',
            'last_name' => 'Doe',
            'email' => 'cashier@gmail.com',
            'role' => 'cashier',
            'phone_number' => '09887665543',
            'password' => Hash::make('password'),
        ]);
    }
}
