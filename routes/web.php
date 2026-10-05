<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdatbazisController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/adatbazis', [AdatbazisController::class, 'adatbazisLekero'])
    ->name('adatbazis');
