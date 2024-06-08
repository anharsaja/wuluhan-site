<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\RolesController;
use App\Http\Controllers\Backend\UsersController;
use App\Http\Controllers\Backend\AdminsController;
use App\Http\Controllers\Backend\Auth\LoginController;
use App\Http\Controllers\Backend\DashboardController;
/***  Sekretariat -- umpeg */
use App\Http\Controllers\Backend\sekretariat_controller\umpeg\CategoryUmpegController;
use App\Http\Controllers\Backend\sekretariat_controller\umpeg\UmpegController;
/***  ekretariat -- plk */
use App\Http\Controllers\Backend\sekretariat_controller\plk\CategoryPlkController;
use App\Http\Controllers\Backend\sekretariat_controller\plk\PlkController;
/*** Pemerintahan -- RAPBDES */
use App\Http\Controllers\Backend\pemerintahan_controller\rapbdes\CategoryRapbdesController;
use App\Http\Controllers\Backend\pemerintahan_controller\rapbdes\RapbdesController;
/*** Pemerintahan -- Desa */
use App\Http\Controllers\Backend\pemerintahan_controller\desa\CategoryDesaController;
use App\Http\Controllers\Backend\pemerintahan_controller\desa\DesaController;
/*** Pemerintahan -- Produk Hukum */
use App\Http\Controllers\Backend\pemerintahan_controller\produk_hukum\CategoryProdukHukumController;
use App\Http\Controllers\Backend\pemerintahan_controller\produk_hukum\ProdukHukumController;
/*** Pelum - Adminduk */
use App\Http\Controllers\Backend\pelum_controller\adminduk\CategoryAdmindukController;
use App\Http\Controllers\Backend\pelum_controller\adminduk\AdmindukController;
use App\Http\Controllers\Backend\pmks_controller\kencana\CategoryKencanaController;
use App\Http\Controllers\Backend\pmks_controller\kencana\KencanaController;
use App\Http\Controllers\Backend\pmks_controller\osjj\CategoryOsjjController;
use App\Http\Controllers\Backend\pmks_controller\osjj\OsjjController;
use App\Http\Controllers\Backend\pmks_controller\pkk\CategoryPkkController;
use App\Http\Controllers\Backend\pmks_controller\pkk\PkkController;

/*** Pelum - PMKS */


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

/*** Admin routes */
Route::group(['prefix' => 'admin'], function () {
    Route::middleware('auth:admin')->group(function () {
        Route::get('/', [DashboardController::class, 'index'])->name('admin.dashboard');
        Route::resource('roles', RolesController::class, ['names' => 'admin.roles']);
        Route::resource('users', UsersController::class, ['names' => 'admin.users']);
        Route::resource('admins', AdminsController::class, ['names' => 'admin.admins']);

        
        /*** SEKRETARIAT - UMPEG */
        Route::resource('/sekretariatan/umpeg', UmpegController::class, ['names' => 'admin.umpeg']);
        Route::get('/sekretariatan/umpeg/category/{id}', [UmpegController::class, 'category'])->name('admin.umpeg.category');
        Route::get('/sekretariatan/umpeg/surat/public', [UmpegController::class, 'indexPublic'])->name('admin.umpeg.public');
        Route::get('/sekretariatan/umpeg/surat/private', [UmpegController::class, 'indexPrivate'])->name('admin.umpeg.private');
        Route::controller(CategoryUmpegController::class)->group(function () {
            Route::post('/sekretariatan/umpeg/category/store', 'store')->name('admin.umpeg.category.store');
            Route::post('/sekretariatan/umpeg/category/update/{id}', 'update')->name('admin.umpeg.category.update');
            Route::get('/sekretariatan/umpeg/category/delete/{id}', 'delete')->name('admin.umpeg.category.delete');
        });
        
        /*** SEKRETARIAT - PLK */
        Route::resource('/sekretariatan/plk', PlkController::class, ['names' => 'admin.plk']);
        Route::get('/sekretariatan/plk/category/{id}', [PlkController::class, 'category'])->name('admin.plk.category');
        Route::get('/sekretariatan/plk/surat/public', [PlkController::class, 'indexPublic'])->name('admin.plk.public');
        Route::get('/sekretariatan/plk/surat/private', [PlkController::class, 'indexPrivate'])->name('admin.plk.private');
        Route::controller(CategoryPlkController::class)->group(function () {
            Route::post('/sekretariatan/plk/category/store', 'store')->name('admin.plk.category.store');
            Route::post('/sekretariatan/plk/category/update/{id}', 'update')->name('admin.plk.category.update');
            Route::get('/sekretariatan/plk/category/delete/{id}', 'delete')->name('admin.plk.category.delete');
        });
        
        /*** PEMERINTAHAN - RAPBDES */
        Route::resource('/pemerintahan/rapbdes', RapbdesController::class, ['names' => 'admin.rapbdes']);
        Route::get('/pemerintahan/rapbdes/category/{id}', [RapbdesController::class, 'category'])->name('admin.rapbdes.category');
        Route::get('/pemerintahan/rapbdes/surat/public', [RapbdesController::class, 'indexPublic'])->name('admin.rapbdes.public');
        Route::get('/pemerintahan/rapbdes/surat/private', [RapbdesController::class, 'indexPrivate'])->name('admin.rapbdes.private');
        Route::controller(CategoryRapbdesController::class)->group(function () {
            Route::post('/pemerintahan/rapbdes/category/store', 'store')->name('admin.rapbdes.category.store');
            Route::post('/pemerintahan/rapbdes/category/update/{id}', 'update')->name('admin.rapbdes.category.update');
            Route::get('/pemerintahan/rapbdes/category/delete/{id}', 'delete')->name('admin.rapbdes.category.delete');
        });

        /*** PEMERINTAHAN - DESA */
        Route::resource('/pemerintahan/desa', DesaController::class, ['names' => 'admin.desa']);
        Route::get('/pemerintahan/desa/category/{id}', [DesaController::class, 'category'])->name('admin.desa.category');
        Route::get('/pemerintahan/desa/surat/public', [DesaController::class, 'indexPublic'])->name('admin.desa.public');
        Route::get('/pemerintahan/desa/surat/private', [DesaController::class, 'indexPrivate'])->name('admin.desa.private');
        Route::controller(CategoryDesaController::class)->group(function () {
            Route::post('/pemerintahan/desa/category/store', 'store')->name('admin.desa.category.store');
            Route::post('/pemerintahan/desa/category/update/{id}', 'update')->name('admin.desa.category.update');
            Route::get('/pemerintahan/desa/category/delete/{id}', 'delete')->name('admin.desa.category.delete');
        });

        /*** PEMERINTAHAN - PRODUK HUKUM */
        Route::resource('/pemerintahan/produkhukum', ProdukHukumController::class, ['names' => 'admin.produkhukum']);
        Route::get('/pemerintahan/produkhukum/category/{id}', [ProdukHukumController::class, 'category'])->name('admin.produkhukum.category');
        Route::get('/pemerintahan/produkhukum/surat/public', [ProdukHukumController::class, 'indexPublic'])->name('admin.produkhukum.public');
        Route::get('/pemerintahan/produkhukum/surat/private', [ProdukHukumController::class, 'indexPrivate'])->name('admin.produkhukum.private');
        Route::controller(CategoryProdukHukumController::class)->group(function () {
            Route::post('/pemerintahan/produkhukum/category/store', 'store')->name('admin.produkhukum.category.store');
            Route::post('/pemerintahan/produkhukum/category/update/{id}', 'update')->name('admin.produkhukum.category.update');
            Route::get('/pemerintahan/produkhukum/category/delete/{id}', 'delete')->name('admin.produkhukum.category.delete');
        });

        /*** PELUM - ADMINDUK */
        Route::resource('/pelum/adminduk', AdmindukController::class, ['names' => 'admin.adminduk']);
        Route::get('/pelum/adminduk/category/{id}', [AdmindukController::class, 'category'])->name('admin.adminduk.category');
        Route::get('/pelum/adminduk/surat/public', [AdmindukController::class, 'indexPublic'])->name('admin.adminduk.public');
        Route::get('/pelum/adminduk/surat/private', [AdmindukController::class, 'indexPrivate'])->name('admin.adminduk.private');
        Route::controller(CategoryAdmindukController::class)->group(function () {
            Route::post('/pelum/adminduk/category/store', 'store')->name('admin.adminduk.category.store');
            Route::post('/pelum/adminduk/category/update/{id}', 'update')->name('admin.adminduk.category.update');
            Route::get('/pelum/adminduk/category/delete/{id}', 'delete')->name('admin.adminduk.category.delete');
        });

        /*** PMKS - PKK */
        Route::resource('/pmks/pkk', PkkController::class, ['names' => 'admin.pkk']);
        Route::get('/pmks/pkk/category/{id}', [PkkController::class, 'category'])->name('admin.pkk.category');
        Route::get('/pmks/pkk/surat/public', [PkkController::class, 'indexPublic'])->name('admin.pkk.public');
        Route::get('/pmks/pkk/surat/private', [PkkController::class, 'indexPrivate'])->name('admin.pkk.private');
        Route::controller(CategoryPkkController::class)->group(function () {
            Route::post('/pmks/pkk/category/store', 'store')->name('admin.pkk.category.store');
            Route::post('/pmks/pkk/category/update/{id}', 'update')->name('admin.pkk.category.update');
            Route::get('/pmks/pkk/category/delete/{id}', 'delete')->name('admin.pkk.category.delete');
        });

        /*** PMKS - OSJJ */
        Route::resource('/pmks/osjj', OsjjController::class, ['names' => 'admin.osjj']);
        Route::get('/pmks/osjj/category/{id}', [OsjjController::class, 'category'])->name('admin.osjj.category');
        Route::get('/pmks/osjj/surat/public', [OsjjController::class, 'indexPublic'])->name('admin.osjj.public');
        Route::get('/pmks/osjj/surat/private', [OsjjController::class, 'indexPrivate'])->name('admin.osjj.private');
        Route::controller(CategoryOsjjController::class)->group(function () {
            Route::post('/pmks/osjj/category/store', 'store')->name('admin.osjj.category.store');
            Route::post('/pmks/osjj/category/update/{id}', 'update')->name('admin.osjj.category.update');
            Route::get('/pmks/osjj/category/delete/{id}', 'delete')->name('admin.osjj.category.delete');
        });

        /*** PMKS - KENCANA */
        Route::resource('/pmks/kencana', KencanaController::class, ['names' => 'admin.kencana']);
        Route::get('/pmks/kencana/category/{id}', [KencanaController::class, 'category'])->name('admin.kencana.category');
        Route::get('/pmks/kencana/surat/public', [KencanaController::class, 'indexPublic'])->name('admin.kencana.public');
        Route::get('/pmks/kencana/surat/private', [KencanaController::class, 'indexPrivate'])->name('admin.kencana.private');
        Route::controller(CategoryKencanaController::class)->group(function () {
            Route::post('/pmks/kencana/category/store', 'store')->name('admin.kencana.category.store');
            Route::post('/pmks/kencana/category/update/{id}', 'update')->name('admin.kencana.category.update');
            Route::get('/pmks/kencana/category/delete/{id}', 'delete')->name('admin.kencana.category.delete');
        });



    });

    /*** Login Routes */
    Route::get('/login', 'Backend\Auth\LoginController@showLoginForm')->name('admin.login');
    Route::post('/login/submit', [LoginController::class, 'login'])->name('admin.login.submit');

    /*** Logout Routes */
    Route::get('/logout/submit', [LoginController::class, 'logout'])->name('admin.logout.submit');

    /*** Forget Password Routes */
    Route::get('/password/reset', 'Backend\Auth\ForgetPasswordController@showLinkRequestForm')->name('admin.password.request');
    Route::post('/password/reset/submit', 'Backend\Auth\ForgetPasswordController@reset')->name('admin.password.update');
});
