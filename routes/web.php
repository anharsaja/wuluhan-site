<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\RolesController;
use App\Http\Controllers\Backend\UsersController;
use App\Http\Controllers\Backend\AdminsController;
use App\Http\Controllers\Backend\Auth\LoginController;
use App\Http\Controllers\Backend\DashboardController;

// Sekretariat -- umpeg
use App\Http\Controllers\Backend\sekretariat_controller\umpeg\CategoryUmpegController;
use App\Http\Controllers\Backend\sekretariat_controller\umpeg\UmpegController;
// Sekretariat -- plk
use App\Http\Controllers\Backend\sekretariat_controller\plk\CategoryPlkController;
use App\Http\Controllers\Backend\sekretariat_controller\plk\PlkController;


// Pemerintahan -- RAPBDES
use App\Http\Controllers\Backend\pemerintahan_controller\rapbdes\CategoryRapbdesController;
use App\Http\Controllers\Backend\pemerintahan_controller\rapbdes\RapbdesController;
// Pemerintahan -- Desa
// Pemerintahan -- Produk Hukum 

use App\Http\Controllers\LandingPage\HomeController;

Auth::routes();

Route::controller(HomeController::class)->group(function () {
    Route::get('/', 'index')->name('home');
    Route::get('/team', 'team')->name('home.team');
    Route::get('/team/details', 'teamdetails')->name('home.teamdetails');
    Route::get('/team/blog', 'blog')->name('home.blog');
    Route::get('/team/blog/details', 'blogdetails')->name('home.blogdetails');
    Route::get('/team/contact', 'contact')->name('home.contact');
    Route::get('/gallery', 'gallery')->name('home.gallery');
});

/**
 * Admin routes
 */
Route::group(['prefix' => 'admin'], function () {
    Route::middleware('auth:admin')->group(function () {
        Route::get('/', [DashboardController::class, 'index'])->name('admin.dashboard');
        Route::resource('roles', RolesController::class, ['names' => 'admin.roles']);
        Route::resource('users', UsersController::class, ['names' => 'admin.users']);
        Route::resource('admins', AdminsController::class, ['names' => 'admin.admins']);

        
        // SEKRETARIAT - UMPEG
        Route::resource('/sekretariatan/umpeg', UmpegController::class, ['names' => 'admin.umpeg']);
        Route::get('/sekretariatan/umpeg/category/{id}', [UmpegController::class, 'category'])->name('admin.umpeg.category');
        Route::get('/sekretariatan/umpeg/surat/public', [UmpegController::class, 'indexPublic'])->name('admin.umpeg.public');
        Route::get('/sekretariatan/umpeg/surat/private', [UmpegController::class, 'indexPrivate'])->name('admin.umpeg.private');
        Route::controller(CategoryUmpegController::class)->group(function () {
            Route::post('/sekretariatan/umpeg/category/store', 'store')->name('admin.umpeg.category.store');
            Route::post('/sekretariatan/umpeg/category/update/{id}', 'update')->name('admin.umpeg.category.update');
            Route::get('/sekretariatan/umpeg/category/delete/{id}', 'delete')->name('admin.umpeg.category.delete');
        });
        
        // SEKRETARIAT - PLK
        Route::resource('/sekretariatan/plk', PlkController::class, ['names' => 'admin.plk']);
        Route::get('/sekretariatan/plk/category/{id}', [PlkController::class, 'category'])->name('admin.plk.category');
        Route::get('/sekretariatan/plk/surat/public', [PlkController::class, 'indexPublic'])->name('admin.plk.public');
        Route::get('/sekretariatan/plk/surat/private', [PlkController::class, 'indexPrivate'])->name('admin.plk.private');
        Route::controller(CategoryPlkController::class)->group(function () {
            Route::post('/sekretariatan/plk/category/store', 'store')->name('admin.plk.category.store');
            Route::post('/sekretariatan/plk/category/update/{id}', 'update')->name('admin.plk.category.update');
            Route::get('/sekretariatan/plk/category/delete/{id}', 'delete')->name('admin.plk.category.delete');
        });
        
        // PEMERINTAHAN - RAPBDES
        Route::resource('/pemerintahan/rapbdes', RapbdesController::class, ['names' => 'admin.rapbdes']);
        Route::get('/pemerintahan/rapbdes/category/{id}', [RapbdesController::class, 'category'])->name('admin.rapbdes.category');
        Route::get('/pemerintahan/rapbdes/surat/public', [RapbdesController::class, 'indexPublic'])->name('admin.rapbdes.public');
        Route::get('/pemerintahan/rapbdes/surat/private', [RapbdesController::class, 'indexPrivate'])->name('admin.rapbdes.private');
        Route::controller(CategoryRapbdesController::class)->group(function () {
            Route::post('/pemerintahan/rapbdes/category/store', 'store')->name('admin.rapbdes.category.store');
            Route::post('/pemerintahan/rapbdes/category/update/{id}', 'update')->name('admin.rapbdes.category.update');
            Route::get('/pemerintahan/rapbdes/category/delete/{id}', 'delete')->name('admin.rapbdes.category.delete');
        });

        // PEMERINTAHAN - DESA
        Route::resource('/pemerintahan/rapbdes', RapbdesController::class, ['names' => 'admin.rapbdes']);
        Route::get('/pemerintahan/rapbdes/category/{id}', [RapbdesController::class, 'category'])->name('admin.rapbdes.category');
        Route::get('/pemerintahan/rapbdes/surat/public', [RapbdesController::class, 'indexPublic'])->name('admin.rapbdes.public');
        Route::get('/pemerintahan/rapbdes/surat/private', [RapbdesController::class, 'indexPrivate'])->name('admin.rapbdes.private');
        Route::controller(CategoryRapbdesController::class)->group(function () {
            Route::post('/pemerintahan/rapbdes/category/store', 'store')->name('admin.rapbdes.category.store');
            Route::post('/pemerintahan/rapbdes/category/update/{id}', 'update')->name('admin.rapbdes.category.update');
            Route::get('/pemerintahan/rapbdes/category/delete/{id}', 'delete')->name('admin.rapbdes.category.delete');
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
