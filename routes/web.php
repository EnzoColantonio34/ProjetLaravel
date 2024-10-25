<?php

use App\Http\Controllers\Back\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');


Route::get('/bonjour/{prenom}/{numero}/{nom?}',function ($prenom, $numero, $nom = "test"){
    return view('test', compact('prenom', 'numero'));
})->where('numero', '[0-9]+');


Route::get('/hello/{prenom}', [HomeController::class, 'index'])->name('hello');


Route::get('/animals', [\App\Http\Controllers\Back\AnimalController::class, 'create'])->name('animals.create');
Route::post('/animals', [\App\Http\Controllers\Back\AnimalController::class, 'store'])->name('animals.store');

// Route::resource('animals', \App\Http\Controllers\Back\AnimalController::class);