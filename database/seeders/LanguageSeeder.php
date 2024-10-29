<?php

namespace Database\Seeders;

use App\Models\Translation;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Language;
class LanguageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Language::factory()->create(10);
//        $english = Language::create([
//            'language' => 'English',
//            'code' => 'en',
//        ]);
//        $azerbaijani = Language::create([
//            'language' => 'Azerbaijani',
//            'code' => 'az',
//        ]);
//        Translation::create([
//            'language_id' => $english->id,
//            'keyword' => 'hello',
//            'translation' => 'hello',
//        ]);
//        Translation::create([
//            'language_id' => $azerbaijani->id,
//            'keyword' => 'hello',
//            'translation' => 'hello',
//        ]);
    }
}
