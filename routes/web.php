<?php

use MultiAuth\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('users/{id}', [HomeController::class, 'index']);