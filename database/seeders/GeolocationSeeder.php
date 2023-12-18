<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Geolocation;

class GeolocationsSeeder extends Seeder
{
    public function run()
    {
        Geolocation::factory(50)->create();
    }
}
