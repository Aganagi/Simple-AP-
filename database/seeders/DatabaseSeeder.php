<?php

namespace Database\Seeders;

use App\Models\Language;
use App\Models\Post;
use App\Models\Translation;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Database\Factories\TranslationFactory;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
        Language::factory(4)->create();
        Language::all()->each(function ($language) {
            Translation::factory()->count(5)->create([
                'language_id' => $language->id,
            ]);
        });
    }
}
