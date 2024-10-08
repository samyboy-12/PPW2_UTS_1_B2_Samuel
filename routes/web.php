<?php

use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\PemainMUController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/pemainmu',[PemainMUController::class,'index']);
