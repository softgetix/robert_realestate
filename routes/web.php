<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\PropertyController;
use App\Http\Controllers\Admin\DashboardController;
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
    return view('index');
});



Route::get('/admin', [AdminController::class, 'login']);
Route::any('/admin/submit', [AdminController::class, 'login_submit']);
Route::any('/admin/logout', [AdminController::class, 'logout']);

Route::get('/dashboard', [DashboardController::class, 'viewDashboard']);

Route::get('/property', [PropertyController::class, 'index']);
Route::get('/add-property', [PropertyController::class, 'add_property']);
Route::post('/submit-property', [PropertyController::class, 'submit_property']);



