<?php

namespace Database\Factories;

use App\Models\ScamType;
use Illuminate\Database\Eloquent\Factories\Factory;

class ScamTypeFactory extends Factory
{
    protected $model = ScamType::class;

    public function definition()
    {
        $scamTypes = [
            'Phishing Scam',
            'Tech Support Scam',
            'Online Shopping Fraud',
            'Lottery or Prize Scam',
            'IRS Impersonation',
            'Romance Scam',
            'Job Offer Scam',
            'Investment Scam',
            'Identity Theft',
            'SMS or Text Message Scam',
            'Social Engineering Scam',
            'Fake Charity Scam',
            'Email Spoofing',
            // Add more scam types as needed
        ];

        return [
            'name' => $this->faker->unique()->randomElement($scamTypes),
            'description' => $this->faker->text,
            // Add other fields as needed
        ];
    }
}
