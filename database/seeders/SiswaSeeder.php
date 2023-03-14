<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SiswaSeeder extends Seeder
{
    

    public function run()
    {
        DB::table('siswa')->insert([
            [
                'nisn' => '005290837',
                'nis' => '119900',
                'nama' => 'Zahra',
                'id_kelas' => 3,
                'alamat' => 'Majalengka',
                'no_telp' => '085890392840',
                'id_spp' => 3,
                'jk' => 'Perempuan',
                
            ],

            [
                'nisn' => '0052737217',
                'nis' => '1199007',
                'nama' => 'Faisal',
                'id_kelas' => 2,
                'alamat' => 'Magelang',
                'no_telp' => '085890392670',
                'id_spp' => 3,
                'jk' => 'Laki-Laki',
               
            ],

            [
                'nisn' => '0052737215',
                'nis' => '1199006',
                'nama' => 'Ilyas',
                'id_kelas' => 2,
                'alamat' => 'Cibakung',
                'no_telp' => '085890392390',
                'id_spp' => 3,
                'jk' => 'Laki-Laki',
               
            ],

            [
                'nisn' => '0052737213',
                'nis' => '1199560',
                'nama' => 'Syahla A',
                'id_kelas' => 2,
                'alamat' => 'Babakan Pandan',
                'no_telp' => '085890392740',
                'id_spp' => 3,
                'jk' => 'Perempuan',
               
            ],
        ]);
    }

   
}
