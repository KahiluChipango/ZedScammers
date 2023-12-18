<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\ScamTrend;

class ScamTrendsSeeder extends Seeder
{
    public function run()
    {
        ScamTrend::factory(20)->create();
    }
}
