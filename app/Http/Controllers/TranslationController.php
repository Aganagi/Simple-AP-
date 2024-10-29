<?php

namespace App\Http\Controllers;

use App\Models\Language;
use App\Models\Translation;
use App\Http\Requests\StoreTranslationRequest;
use App\Http\Requests\UpdateTranslationRequest;
use Illuminate\Http\Request;

class TranslationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $langCode = $request->header('Accept-Language', 'en');
        $language = Language::where('code', $langCode)->first();
        if (!$language){
            return response()->json(['message' => 'Language not found'], 404);
        }
        $translations = $language->translations()->pluck('translation', 'keyword');
        return response()->json($translations, 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTranslationRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Translation $translation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTranslationRequest $request, Translation $translation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Translation $translation)
    {
        //
    }
}
