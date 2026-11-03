<?php

namespace Database\Seeders;

use App\Models\Jam;
use Illuminate\Database\Seeder;

class JamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Jam::factory(80)->create();
    }
}
