<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OfficerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('officer')->insert([
            [
                'username' => 'petugas1',
                'password' => '90908519',
                'nama_petugas' => 'Amanda',
                'level' => '2',
                'jk' => 'Perempuan',
                'no_telp' => '0868903547',
                'alamat' => 'Sindang Asih',
            ],

            [
                'username' => 'admin1',
                'password' => '90973519',
                'nama_petugas' => 'Sandi',
                'level' => '1',
                'jk' => 'Laki-Laki',
                'no_telp' => '0864603547',
                'alamat' => 'Sindang Laka',
            ],

            [
                'username' => 'petugas3',
                'password' => '78908519',
                'nama_petugas' => 'Geisya',
                'level' => '2',
                'jk' => 'Perempuan',
                'no_telp' => '0890903547',
                'alamat' => 'Karang Tengah',
            ],
        ]);
    }
}
