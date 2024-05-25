<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\UmkmController;
use App\Http\Controllers\Backend\RolesController;
use App\Http\Controllers\Backend\UsersController;
use App\Http\Controllers\Backend\AdminsController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\Auth\LoginController;
use App\Http\Controllers\Backend\CategoryUmkmController;

Auth::routes();
// Route::get('/', function() {
//     return view('backend2.layouts.master');
// })->name('home.landing');

Route::get('/', 'LandingPage\HomeController@index')->name('home.landing');

Route::get('/home', 'HomeController@index')->name('home');

/**
 * Admin routes
 */
Route::group(['prefix' => 'admin'], function () {
    Route::middleware('auth:admin')->group(function () {
        Route::get('/', [DashboardController::class, 'index'])->name('admin.dashboard');
        Route::resource('roles', RolesController::class, ['names' => 'admin.roles']);
        Route::resource('users', UsersController::class, ['names' => 'admin.users']);
        Route::resource('admins', AdminsController::class, ['names' => 'admin.admins']);
        
        // UMKM
        Route::resource('umkm', UmkmController::class, ['names' => 'admin.umkm']);
        Route::get('/umkm/category/{id}', [UmkmController::class, 'category'])->name('admin.umkm.category');
        Route::controller(CategoryUmkmController::class)->group(function() {
            Route::post('/umkm/category/store', 'store')->name('admin.umkm.category.store');
            Route::post('/umkm/category/update/{id}', 'update')->name('admin.umkm.category.update');
            Route::get('/umkm/category/delete/{id}', 'delete')->name('admin.umkm.category.delete');
        });

    });

    // Login Routes
    Route::get('/login', 'Backend\Auth\LoginController@showLoginForm')->name('admin.login');
    Route::post('/login/submit', [LoginController::class, 'login'])->name('admin.login.submit');

    // Logout Routes
    Route::get('/logout/submit', [LoginController::class, 'logout'])->name('admin.logout.submit');

    // Forget Password Routes
    Route::get('/password/reset', 'Backend\Auth\ForgetPasswordController@showLinkRequestForm')->name('admin.password.request');
    Route::post('/password/reset/submit', 'Backend\Auth\ForgetPasswordController@reset')->name('admin.password.update');
});
