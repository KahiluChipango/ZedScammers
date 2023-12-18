<?php

namespace Database\Factories;

use App\Models\Screenshot;
use Illuminate\Database\Eloquent\Factories\Factory;

class ScreenshotFactory extends Factory
{
    protected $model = Screenshot::class;

    public function definition()
    {
        return [
            'file_path' => $this->faker->imageUrl(),
            // Add other fields as needed
        ];
    }
}

