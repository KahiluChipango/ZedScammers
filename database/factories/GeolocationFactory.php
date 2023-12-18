<?php

namespace Database\Factories;

use App\Models\Geolocation;
use Illuminate\Database\Eloquent\Factories\Factory;

class GeolocationFactory extends Factory
{
    protected $model = Geolocation::class;

    public function definition()
    {
        return [
            'latitude' => $this->faker->latitude,
            'longitude' => $this->faker->longitude,
            'city' => $this->faker->city,
            'country' => $this->faker->country,
            // Add other fields as needed
        ];
    }
}
