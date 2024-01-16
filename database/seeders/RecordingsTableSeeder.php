<?php

namespace Database\Seeders;

use App\Models\Recordings;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RecordingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Recordings::factory()->count(5)->create();
    }
}
