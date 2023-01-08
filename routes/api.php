<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResource('book', \App\Http\Controllers\API\BookController::class);
Route::apiResource('client', \App\Http\Controllers\API\ClientController::class);
Route::apiResource('order', \App\Http\Controllers\API\OrderController::class);
Route::apiResource('role', \App\Http\Controllers\API\RoleController::class);
Route::apiResource('user', \App\Http\Controllers\API\UserController::class);
