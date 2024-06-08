<?php

use App\Http\Controllers\PreUserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('pre-register-user', PreUserController::class);