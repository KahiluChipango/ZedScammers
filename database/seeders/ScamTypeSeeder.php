<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\ScamType;

class ScamTypesSeeder extends Seeder
{
    public function run()
    {
        ScamType::factory(5)->create();
    }
}
