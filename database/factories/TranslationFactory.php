<?php

namespace Database\Factories;

use App\Models\Language;
use App\Models\Translation;
use Illuminate\Database\Eloquent\Factories\Factory;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Translation>
 */
class TranslationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Translation::class;
    public function definition(): array
    {
        return [
            'language_id'=>Language::inRandomOrder()->first()->id,
            'keyword' => $this->faker->unique()->word,
            'translation' => $this->faker->word,
        ];
    }
}
