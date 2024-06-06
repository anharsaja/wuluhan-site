<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\RolesController;
use App\Http\Controllers\Backend\UsersController;
use App\Http\Controllers\Backend\AdminsController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\Auth\LoginController;

// Sekretariat -- umpeg
use App\Http\Controllers\Backend\sekretariat_controller\umpeg\CategoryUmpegController;
use App\Http\Controllers\Backend\sekretariat_controller\umpeg\UmpegController;
// Sekretariat -- plk
use App\Http\Controllers\Backend\sekretariat_controller\plk\CategoryPlkController;
use App\Http\Controllers\Backend\sekretariat_controller\plk\PlkController;



// Pemerintahan -- RAPBDES
// Pemerintahan -- Desa
// Pemerintahan -- Produk Hukum 
use App\Http\Controllers\Backend\umkm_controller\UmkmController;
use App\Http\Controllers\Backend\umkm_controller\CategoryUmkmController;
use App\Http\Controllers\Backend\budaya_controller\BudayaController;
use App\Http\Controllers\Backend\budaya_controller\CategoryBudayaController;
use App\Http\Controllers\Backend\ktb_controller\CategoryKtbController;
use App\Http\Controllers\Backend\ktb_controller\KtbController;
use App\Http\Controllers\Backend\osjj_controller\CategoryOsjjController;
use App\Http\Controllers\Backend\osjj_controller\OsjjController;
use App\Http\Controllers\Backend\pkk_controller\CategoryPkkController;
use App\Http\Controllers\Backend\pkk_controller\PkkController;
use App\Http\Controllers\Backend\wisata_controller\CategoryWisataController;
use App\Http\Controllers\Backend\wisata_controller\WisataController;
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
        Route::resource('umpeg', UmpegController::class, ['names' => 'admin.umpeg']);
        Route::get('/umpeg/category/{id}', [UmpegController::class, 'category'])->name('admin.umpeg.category');
        Route::get('/umpeg/surat/public', [UmpegController::class, 'indexPublic'])->name('admin.umpeg.public');
        Route::get('/umpeg/surat/private', [UmpegController::class, 'indexPrivate'])->name('admin.umpeg.private');
        Route::controller(CategoryUmpegController::class)->group(function () {
            Route::post('/umpeg/category/store', 'store')->name('admin.umpeg.category.store');
            Route::post('/umpeg/category/update/{id}', 'update')->name('admin.umpeg.category.update');
            Route::get('/umpeg/category/delete/{id}', 'delete')->name('admin.umpeg.category.delete');
        });
        
        // SEKRETARIAT - PLK
        Route::resource('plk', PlkController::class, ['names' => 'admin.plk']);
        Route::get('/plk/category/{id}', [PlkController::class, 'category'])->name('admin.plk.category');
        Route::get('/plk/surat/public', [PlkController::class, 'indexPublic'])->name('admin.plk.public');
        Route::get('/plk/surat/private', [PlkController::class, 'indexPrivate'])->name('admin.plk.private');
        Route::controller(CategoryPlkController::class)->group(function () {
            Route::post('/plk/category/store', 'store')->name('admin.plk.category.store');
            Route::post('/plk/category/update/{id}', 'update')->name('admin.plk.category.update');
            Route::get('/plk/category/delete/{id}', 'delete')->name('admin.plk.category.delete');
        });



        // UMKM
        Route::resource('umkm', UmkmController::class, ['names' => 'admin.umkm']);
        Route::get('/umkm/category/{id}', [UmkmController::class, 'category'])->name('admin.umkm.category');
        Route::controller(CategoryUmkmController::class)->group(function () {
            Route::post('/umkm/category/store', 'store')->name('admin.umkm.category.store');
            Route::post('/umkm/category/update/{id}', 'update')->name('admin.umkm.category.update');
            Route::get('/umkm/category/delete/{id}', 'delete')->name('admin.umkm.category.delete');
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
        // PKK
        Route::resource('pkk', PkkController::class, ['names' => 'admin.pkk']);
        Route::get('/pkk/category/{id}', [PkkController::class, 'category'])->name('admin.pkk.category');
        Route::get('/pkk/surat/public', [PkkController::class, 'indexPublic'])->name('admin.pkk.public');
        Route::get('/pkk/surat/private', [PkkController::class, 'indexPrivate'])->name('admin.pkk.private');
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
