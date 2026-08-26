<?php

use App\Http\Controllers\Api\AuthController;

Route::post('/register', [AuthController::class, 'register']);
Route::post('/login',[AuthController::class , 'login']);
Route::get('/current-user',[AuthController::class , 'getCurrentUser'])->middleware('auth:sanctum');