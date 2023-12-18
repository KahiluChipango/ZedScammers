<?php

namespace Database\Factories;

use App\Models\ScamTrend;
use Illuminate\Database\Eloquent\Factories\Factory;

class ScamTrendFactory extends Factory
{
    protected $model = ScamTrend::class;

    public function definition()
    {
        return [
            'trend_date' => $this->faker->date,
            'description' => $this->faker->text,
            // Add other fields as needed
        ];
    }
}
