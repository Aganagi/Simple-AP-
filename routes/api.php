<?php

use App\Http\Controllers\TranslationController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

//Route::get('/user', function (Request $request) {
//    return $request->user();
//})->middleware('auth:sanctum');
Route::apiResource('posts', \App\Http\Controllers\PostController::class);
Route::get('/translations', [TranslationController::class, 'index']);
