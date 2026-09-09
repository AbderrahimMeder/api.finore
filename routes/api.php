<?php

use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\TransactionController;
// auth
Route::post('/register', [AuthController::class, 'register']);
Route::post('/login',[AuthController::class , 'login']);
Route::middleware('auth:sanctum')->group(function () {
    Route::get('/current-user',[AuthController::class , 'getCurrentUser']);
    Route::get('/transactions',[TransactionController::class , 'index']);
    Route::get('/transactions/{id}',[TransactionController::class , 'show']);
});
