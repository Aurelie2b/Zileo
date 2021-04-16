<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('home');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/addAnimals', [App\Http\Controllers\AnimalsController::class, 'insertform'])->name('addAnimals');
Route::get('/displayAnimals', [App\Http\Controllers\AnimalsController::class, 'index'])->name('displayAnimals');
Route::get('/insert', [App\Http\Controllers\AnimalsController::class, 'insertform']);
Route::post('/create', [App\Http\Controllers\AnimalsController::class, 'store']);

Route::any('{slug}', function(){
    return view('notfound');
});
