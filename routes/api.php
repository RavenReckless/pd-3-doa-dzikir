<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Auth\JWTAuthController;

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

Route::post('login', [JWTAuthController::class, 'login']);
Route::post('logout', [JWTAuthController::class, 'logout']);
Route::post('refresh', [JWTAuthController::class, 'refresh']);

Route::middleware('auth:api')->group(function () {
    Route::get('user', [JWTAuthController::class, 'me']);
});
