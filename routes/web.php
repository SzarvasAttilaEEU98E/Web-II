<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdatbazisController;

Route::get('/', function () {
    return view('fooldal');
})->name('fooldal');

Route::get('/adatbazis', [AdatbazisController::class, 'adatbazisLekero'])
    ->name('adatbazis');

Route::get('/kapcsolat', function () {
    return view('kapcsolat');
})->name('kapcsolat');