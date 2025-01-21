<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Season;

class SeasonsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $seasonNames = ['春', '夏', '秋', '冬'];

        foreach ($seasonNames as $name) {
            Season::firstOrCreate(['name' => $name]);
        }
    }
}
