<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\routeController;

Route::get('/', [routeController::class,'home']);
Route::get('/register', [routeController::class,'register']);
