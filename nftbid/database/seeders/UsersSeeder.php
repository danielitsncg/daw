<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Admninistrador 1',
            'email' => 'Admin@gmail.com',
            'password' => Hash::make('123'),
            'phone' => '6361523654',
            'alias' => 'admin',
            'image' => 'default.jpg'
        ]);
        DB::table('users')->insert([
            'name' => 'Benito Pablo Juarez Garcia',
            'email' => 'beni07@gmail.com',
            'password' => Hash::make('123'),
            'phone' => '6365236589',
            'alias' => 'beni',
            'image' => 'default.jpg'
        ]);
    }
}
