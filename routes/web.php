<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\CustomerController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('frontend.index');
});



Route::get('/admin', [AdminController::class, 'login']);
Route::any('/admin/submit', [AdminController::class, 'login_submit']);

Route::get('/register', [CustomerController::class, 'index']);
Route::get('/invest', [CustomerController::class, 'investor'])->name('properties');

Route::get('/property_singlepage', [CustomerController::class, 'property_singlepage']);

