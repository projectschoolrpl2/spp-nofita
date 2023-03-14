<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        // $this->call(UserData::class);
        $this->call(SiswaSeeder::class);
        $this->call(GradeSeeder::class);
        $this->call(SppSeeder::class);
        $this->call(OfficerSeeder::class);
    }
}
