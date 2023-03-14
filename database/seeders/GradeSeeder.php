<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GradeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('grade')->insert([
            [
                'nama_kelas' => '10 RPL 1',
                'kompetensi_keahlian' => 'Rekayasa Perangkat Lunak',
            ],
            [
                'nama_kelas' => '10 RPL 2',
                'kompetensi_keahlian' => 'Rekayasa Perangkat Lunak',
            ],
            [
                'nama_kelas' => '10 RPL 3',
                'kompetensi_keahlian' => 'Rekayasa Perangkat Lunak',
            ],
            [
                'nama_kelas' => '11 RPL 1',
                'kompetensi_keahlian' => 'Rekayasa Perangkat Lunak',
            ],
            [
                'nama_kelas' => '11 RPL 2',
                'kompetensi_keahlian' => 'Rekayasa Perangkat Lunak',
            ],
            [
                'nama_kelas' => '12 RPL 1',
                'kompetensi_keahlian' => 'Rekayasa Perangkat Lunak',
            ],
        ]);
    }
}
