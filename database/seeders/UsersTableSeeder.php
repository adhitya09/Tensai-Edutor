<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        // Menambahkan data pengguna
        DB::table('users')->insert([
            [
                'name' => 'Owner',
                'email' => 'owner@gmail.com',
                'password' => Hash::make('password123'), // Ganti dengan password yang diinginkan
                'role' => 'Owner',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Pengajar 1',
                'email' => 'pengajar1@gmail.com',
                'password' => Hash::make('password123'), // Ganti dengan password yang diinginkan
                'role' => 'Pengajar',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Pengajar 2',
                'email' => 'pengajar2@gmail.com',
                'password' => Hash::make('password123'), // Ganti dengan password yang diinginkan
                'role' => 'Pengajar',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}

