<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\AuthController; // Corrected the class name
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

// Public Routes
Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);
Route::get('/products', [productcontroller ::class, 'index']); // Corrected the class name
Route::get('/products/{id}', [productcontroller::class, 'show']); // Corrected the class name
Route::get('/products/search/{name}', [productcontroller::class, 'search']); // Corrected the class name

// Protected Routes
Route::middleware(['auth:sanctum'])->group(function () {
    Route::post('/products', [productcontroller::class, 'store']); // Corrected the class name
    Route::put('/products/{id}', [productcontroller::class, 'update']); // Corrected the class name
    Route::delete('/products/{id}', [productcontroller::class, 'destroy']); // Corrected the class name
    Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth:sanctum');
}); 

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
