<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Public Routes
Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']); // Add middleware here

Route::get('/products', [ProductController::class, 'index']); // Corrected class name
Route::get('/products/{id}', [ProductController::class, 'show']); // Corrected class name
Route::get('/products/aut{name}', [ProductController::class, 'search']); // Corrected class name

// Protected Routes
Route::middleware(['auth:sanctum'])->group(function () {
    Route::post('/products', [ProductController::class, 'store']); // Corrected class name
    Route::put('/products/{id}', [ProductController::class, 'update']); // Corrected class name
    Route::delete('/products/{id}', [ProductController::class, 'destroy']); // Corrected class name
    Route::post('/logout', [AuthController::class, 'logout']);
});

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});