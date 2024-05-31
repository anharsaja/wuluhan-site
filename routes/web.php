<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\umkm_controller\UmkmController;
use App\Http\Controllers\Backend\umkm_controller\CategoryUmkmController;
use App\Http\Controllers\Backend\RolesController;
use App\Http\Controllers\Backend\UsersController;
use App\Http\Controllers\Backend\AdminsController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\Auth\LoginController;
use App\Http\Controllers\Backend\budaya_controller\BudayaController;
use App\Http\Controllers\Backend\budaya_controller\CategoryBudayaController;
use App\Http\Controllers\Backend\ktb_controller\CategoryKtbController;
use App\Http\Controllers\Backend\ktb_controller\KtbController;
use App\Http\Controllers\Backend\osjj_controller\CategoryOsjjController;
use App\Http\Controllers\Backend\osjj_controller\OsjjController;
use App\Http\Controllers\Backend\pkk_controller\CategoryPkkController;
use App\Http\Controllers\Backend\pkk_controller\PkkController;
use App\Http\Controllers\Backend\sotk_controller\CategorySotkController;
use App\Http\Controllers\Backend\sotk_controller\SotkController;
use App\Http\Controllers\Backend\wisata_controller\CategoryWisataController;
use App\Http\Controllers\Backend\wisata_controller\WisataController;
use App\Http\Controllers\LandingPage\HomeController;

Auth::routes();

Route::get('/', [HomeController::class, 'index'])->name('home.landing');
Route::get('/team', [HomeController::class, 'team'])->name('home.landing.team');

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
        Route::controller(CategoryUmkmController::class)->group(function () {
            Route::post('/umkm/category/store', 'store')->name('admin.umkm.category.store');
            Route::post('/umkm/category/update/{id}', 'update')->name('admin.umkm.category.update');
            Route::get('/umkm/category/delete/{id}', 'delete')->name('admin.umkm.category.delete');
        });
        // SOTK
        Route::resource('sotk', SotkController::class, ['names' => 'admin.sotk']);
        Route::get('/sotk/category/{id}', [SotkController::class, 'category'])->name('admin.sotk.category');
        Route::get('/sotk/surat/public', [SotkController::class, 'indexPublic'])->name('admin.sotk.public');
        Route::get('/sotk/surat/private', [SotkController::class, 'indexPrivate'])->name('admin.sotk.private');
        Route::controller(CategorySotkController::class)->group(function () {
            Route::post('/sotk/category/store', 'store')->name('admin.sotk.category.store');
            Route::post('/sotk/category/update/{id}', 'update')->name('admin.sotk.category.update');
            Route::get('/sotk/category/delete/{id}', 'delete')->name('admin.sotk.category.delete');
        });
        // OSJJ
        Route::resource('osjj', OsjjController::class, ['names' => 'admin.osjj']);
        Route::get('/osjj/category/{id}', [OsjjController::class, 'category'])->name('admin.osjj.category');
        Route::get('/osjj/surat/public', [OsjjController::class, 'indexPublic'])->name('admin.osjj.public');
        Route::get('/osjj/surat/private', [OsjjController::class, 'indexPrivate'])->name('admin.osjj.private');
        Route::controller(CategoryOsjjController::class)->group(function () {
            Route::post('/osjj/category/store', 'store')->name('admin.osjj.category.store');
            Route::post('/osjj/category/update/{id}', 'update')->name('admin.osjj.category.update');
            Route::get('/osjj/category/delete/{id}', 'delete')->name('admin.osjj.category.delete');
        });
        // OSJJ
        Route::resource('pkk', PkkController::class, ['names' => 'admin.pkk']);
        Route::get('/pkk/category/{id}', [PkkController::class, 'category'])->name('admin.pkk.category');
        Route::controller(CategoryPkkController::class)->group(function () {
            Route::post('/pkk/category/store', 'store')->name('admin.pkk.category.store');
            Route::post('/pkk/category/update/{id}', 'update')->name('admin.pkk.category.update');
            Route::get('/pkk/category/delete/{id}', 'delete')->name('admin.pkk.category.delete');
        });
        // KTB
        Route::resource('ktb', KtbController::class, ['names' => 'admin.ktb']);
        Route::get('/ktb/category/{id}', [KtbController::class, 'category'])->name('admin.ktb.category');
        Route::controller(CategoryKtbController::class)->group(function () {
            Route::post('/ktb/category/store', 'store')->name('admin.ktb.category.store');
            Route::post('/ktb/category/update/{id}', 'update')->name('admin.ktb.category.update');
            Route::get('/ktb/category/delete/{id}', 'delete')->name('admin.ktb.category.delete');
        });
        // WISATA
        Route::resource('wisata', WisataController::class, ['names' => 'admin.wisata']);
        Route::get('/wisata/category/{id}', [WisataController::class, 'category'])->name('admin.wisata.category');
        Route::controller(CategoryWisataController::class)->group(function () {
            Route::post('/wisata/category/store', 'store')->name('admin.wisata.category.store');
            Route::post('/wisata/category/update/{id}', 'update')->name('admin.wisata.category.update');
            Route::get('/wisata/category/delete/{id}', 'delete')->name('admin.wisata.category.delete');
        });
        // BUDAYA
        Route::resource('budaya', BudayaController::class, ['names' => 'admin.budaya']);
        Route::get('/budaya/category/{id}', [BudayaController::class, 'category'])->name('admin.budaya.category');
        Route::controller(CategoryBudayaController::class)->group(function () {
            Route::post('/budaya/category/store', 'store')->name('admin.budaya.category.store');
            Route::post('/budaya/category/update/{id}', 'update')->name('admin.budaya.category.update');
            Route::get('/budaya/category/delete/{id}', 'delete')->name('admin.budaya.category.delete');
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
