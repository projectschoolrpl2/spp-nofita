<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'name' => 'Admin',
                'username' => 'admin23',
                'password' => bcrypt('a'),
                'remember_token' => Str::random(10),
                'role' => 'admin'
            ],

            [
                'name' => 'Petugas',
                'username' => 'petugas11',
                'password' => bcrypt('a'),
                'remember_token' => Str::random(10),
                'role' => 'petugas'
            ],

            [
                'name' => 'Siswa',
                'username' => 'siswa99',
                'password' => bcrypt('a'),
                'remember_token' => Str::random(10),
                'role' => 'siswa'
            ],
        ];
        DB::table('users')->insert($users);
        
    }
}
