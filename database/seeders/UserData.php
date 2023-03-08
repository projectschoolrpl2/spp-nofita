<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserData extends Seeder
{
    public function run()
    {
        $user = [
            [
                'name' => 'Admin',
                'username' => 'admin0',
                'password' => bcrypt('123'),
                'level' => 1
            ],

            [
                'name' => 'Petugas',
                'username' => 'petugas0',
                'password' => bcrypt('123'),
                'level' => 2
            ],

            [
                'name' => 'Siswa',
                'username' => 'siswa0',
                'password' => bcrypt('123'),
                'level' => 3
            ],
        ];

        foreach($user as $key => $value){
            User::create($value);
        }
    }
}
