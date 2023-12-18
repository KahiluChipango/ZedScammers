<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Screenshot;

class ScreenshotsSeeder extends Seeder
{
    public function run()
    {
        Screenshot::factory(50)->create();
    }
}
