<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::middleware(['auth'])->group(function (){
    Route::get('/', function (){return view('dashboard');})->name('dashboard_view');
    Route::resource('users', UserController::class);
    Route::resource('clients', ClientController::class);
    Route::resource('books', BookController::class);
    Route::resource('orders', OrderController::class);
    Route::resource('role', RoleController::class);
});

Route::get('/logout', function (){
    Auth::logout();
    return redirect()->route('loginIndex');
})->name('logout');
Route::get('/login', [UserController::class, 'loginIndex'])->name('loginIndex');
Route::post('admin-login', [UserController::class, 'adminLogin'])->name('loginAdmin');

Route::get('language/{locale}', function ($locale) {
    session()->put('locale', $locale);
    return redirect()->back();
})->middleware('locale')->name('lang');

