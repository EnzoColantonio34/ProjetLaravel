<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:api');

Route::get('/', function () {
    \App\Models\User::create([
        'name' => 'Enzo',
        'email' => 'enzo.colantonio@ynov.com',
        'password' => \Illuminate\Support\Facades\Hash::make('123456789')
    ]);
    return 'utilisateur créé';
});

Route::apiResource('animals', App\Http\Controllers\Api\V1\AnimalsController::class);
Route::apiResource('species', App\Http\Controllers\Api\V1\SpeciesController::class);
Route::apiResource('enclosures', App\Http\Controllers\Api\V1\EnclosuresController::class);

Route::patch('animal-to-enclosure', [App\Http\Controllers\Api\V1\AnimalsController::class,'assign_enclosure']);