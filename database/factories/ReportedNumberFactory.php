<?php

namespace Database\Factories;

use App\Models\ReportedNumber;
use Illuminate\Database\Eloquent\Factories\Factory;

class ReportedNumberFactory extends Factory
{
    protected $model = ReportedNumber::class;

    public function definition()
    {
        return [
            'phone_number' => $this->faker->phoneNumber,
            'description' => $this->faker->text,
            'reported_at' => $this->faker->dateTime(),
            // Add other fields as needed
        ];
    }
}

