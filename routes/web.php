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

        Route::resource('manage-property', ManagePropertyController::class);
        //extra routes for working with extra data
        Route::get('/manage-property/edit-address/{id}', [ManagePropertyController::class, 'edit_address'])->name('admin.manage-property.edit-address');
        Route::post('/manage-property/update-address/{id}', [ManagePropertyController::class, 'update_address'])->name('admin.manage-property.update-address');


        // edit property details
        Route::get('/manage-property/edit-details/{id}', [ManagePropertyController::class, 'edit_property_details'])->name('admin.manage-property.edit-details');
        Route::post('/manage-property/update-details/{id}', [ManagePropertyController::class, 'update_property_details'])->name('admin.manage-property.update-details');

        



    });
});






Route::get('/register', [CustomerController::class, 'index']);
Route::get('/invest', [CustomerController::class, 'investor'])->name('properties');

Route::get('/property_singlepage', [CustomerController::class, 'property_singlepage']);

