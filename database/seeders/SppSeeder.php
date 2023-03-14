<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SppSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('spp')->insert([
            [
                'tahun' => 2020,
                'nominal' => 100000,
            ],
            [
                'tahun' => 2021,
                'nominal' => 150000,
            ],
            [
                'tahun' => 2022,
                'nominal' => 200000,
            ],
            [
                'tahun' => 2023,
                'nominal' => 250000,
            ],
        ]);
    }
}
