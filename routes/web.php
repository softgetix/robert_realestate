<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\PropertyController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\admin\ManagePropertyController;
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



Route::prefix('/admin')->group(function () {
    Route::get('/', [AdminController::class, 'index'])->name('admin.index');
    Route::post('/login', [AdminController::class, 'login'])->name('admin.login.post');
    Route::middleware('admin.access')->group(function () {
        Route::get('/logout', [AdminController::class, 'logout'])->name('admin.logout');
        Route::get('/dashboard', [DashboardController::class, 'viewDashboard'])->name('admin.dashboard');
       // new property routes

        Route::resource('manage-property',ManagePropertyController::class); 
        //property routes
        Route::get('/property', [PropertyController::class, 'property']);
        Route::get('/add-property', [PropertyController::class, 'add_property']);
        Route::post('/store-property', [PropertyController::class, 'store_property']);
        Route::get('/edit-property/{id}', [PropertyController::class, 'edit_property'])->name('edit-property');
        Route::put('/update-property/{id}', [PropertyController::class, 'update_property'])->name('update-property');
        Route::get('/delete-property/{id}', [PropertyController::class, 'delete_property'])->name('delete-property');
        
    });
});



Route::get('/property', [PropertyController::class, 'property']);
Route::get('/add-property', [PropertyController::class, 'add_property']);
Route::post('/store-property', [PropertyController::class, 'store_property']);
Route::get('/edit-property/{id}', [PropertyController::class, 'edit_property'])->name('edit-property');
Route::put('/update-property/{id}', [PropertyController::class, 'update_property'])->name('update-property');
Route::get('/delete-property/{id}', [PropertyController::class, 'delete_property'])->name('delete-property');


Route::get('/register', [CustomerController::class, 'index']);
Route::get('/invest', [CustomerController::class, 'investor'])->name('properties');

Route::get('/property_singlepage', [CustomerController::class, 'property_singlepage']);

