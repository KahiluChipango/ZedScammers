<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\ReportedNumber;

class ReportedNumbersSeeder extends Seeder
{
    public function run()
    {
        ReportedNumber::factory(50)->create();
    }
}
