<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Company>
 */
class CompanyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'social_reason' => fake()->company,
            'ifu' => fake()->numerify('#############'),
            'rccm' => fake()->name,
            'phone_number' => fake()->phoneNumber,
            'email' => fake()->unique()->companyEmail,
            'lg' => fake()->randomDigitNotZero(),
            'lt' => fake()->randomDigitNotZero(),
            'address' => fake()->address,
        ];
    }
}
