<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Language>
 */
class LanguageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'language' => fake()->unique()->randomElement(['English', 'Azerbaijani', 'French', 'German']),
            'code' => fake()->unique()->randomElement(['en', 'az', 'fr', 'de']),
        ];
    }
}