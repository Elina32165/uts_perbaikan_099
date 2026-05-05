<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PasienController;

Route::get('/', function () {
    return view('layout.master');
});

Route::resource('pasien', PasienController::class);
