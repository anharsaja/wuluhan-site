<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\RolesController;
use App\Http\Controllers\Backend\UsersController;
use App\Http\Controllers\Backend\AdminsController;
use App\Http\Controllers\LandingPage\HomeController;
use App\Http\Controllers\Backend\DashboardController;
/***  Sekretariat -- umpeg */
use App\Http\Controllers\Backend\Auth\LoginController;
use App\Http\Controllers\Backend\pmks_controller\pkk\PkkController;
/***  ekretariat -- plk */
use App\Http\Controllers\Backend\pmks_controller\osjj\OsjjController;
use App\Http\Controllers\Backend\pmks_controller\agama\AgamaController;
/*** Pemerintahan -- RAPBDES */
use App\Http\Controllers\Backend\pmks_controller\budaya\BudayaController;
use App\Http\Controllers\Backend\pmks_controller\wisata\WisataController;
/*** Pemerintahan -- Desa */
use App\Http\Controllers\Backend\sekretariat_controller\plk\PlkController;
use App\Http\Controllers\Backend\pmks_controller\kencana\KencanaController;
/*** Pemerintahan -- Produk Hukum */
use App\Http\Controllers\Backend\pmks_controller\pkk\CategoryPkkController;
use App\Http\Controllers\Backend\pemerintahan_controller\desa\DesaController;
/*** Pelum - Adminduk */
use App\Http\Controllers\Backend\pmks_controller\osjj\CategoryOsjjController;
use App\Http\Controllers\Backend\pelum_controller\adminduk\AdmindukController;
use App\Http\Controllers\Backend\sekretariat_controller\umpeg\UmpegController;
use App\Http\Controllers\Backend\pmks_controller\agama\CategoryAgamaController;
use App\Http\Controllers\Backend\pmks_controller\budaya\CategoryBudayaController;
use App\Http\Controllers\Backend\pmks_controller\wisata\CategoryWisataController;
use App\Http\Controllers\Backend\trantib_controller\surat\SuratTrantibController;
use App\Http\Controllers\Backend\sekretariat_controller\plk\CategoryPlkController;
use App\Http\Controllers\Backend\pemerintahan_controller\rapbdes\RapbdesController;
use App\Http\Controllers\Backend\pmks_controller\kencana\CategoryKencanaController;
use App\Http\Controllers\Backend\pemerintahan_controller\desa\CategoryDesaController;
use App\Http\Controllers\Backend\pelum_controller\adminduk\CategoryAdmindukController;
use App\Http\Controllers\Backend\sekretariat_controller\umpeg\CategoryUmpegController;
use App\Http\Controllers\Backend\trantib_controller\surat\CategorySuratTrantibController;
use App\Http\Controllers\Backend\pemerintahan_controller\rapbdes\CategoryRapbdesController;
use App\Http\Controllers\Backend\pemerintahan_controller\produk_hukum\ProdukHukumController;
use App\Http\Controllers\Backend\trantib_controller\dokumentasi\DokumentasiTantribController;
use App\Http\Controllers\Backend\pemerintahan_controller\produk_hukum\CategoryProdukHukumController;
use App\Http\Controllers\Backend\sekretariat_controller\dokumentasi\CategoryDokumentasiSekretariatController;

/*** Pelum - PMKS */


use App\Http\Controllers\Backend\sekretariat_controller\dokumentasi\DokumentasiSekretariatController;
use App\Http\Controllers\Backend\trantib_controller\dokumentasi\CategoryDokumentasiTantribController;

Auth::routes();

Route::controller(HomeController::class)->group(function () {
    Route::get('/', 'index')->name('home');
    Route::get('/team', 'team')->name('home.team');
    Route::get('/team/details/{id}', 'teamdetails')->name('home.teamdetails');
    Route::get('/team/blog', 'blog')->name('home.blog');
    Route::get('/team/blog/details', 'blogdetails')->name('home.blogdetails');
    Route::get('/team/contact', 'contact')->name('home.contact');
    Route::get('/gallery', 'gallery')->name('home.gallery');
});

/*** Admin routes */
Route::group(['prefix' => 'admin'], function () {
    Route::middleware('auth:admin')->group(function () {
        Route::get('/', [DashboardController::class, 'index'])->name('admin.dashboard');
        Route::get('/profile', [DashboardController::class, 'profile'])->name('admin.profile');
        Route::post('/profile/edit/{id}', [DashboardController::class, 'storeProfile'])->name('admin.profile.edit');
        Route::post('/profile/upload', [DashboardController::class, 'uploadProfile'])->name('admin.avatar.edit');
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
        // Dokumentasi


        
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

        /*** PMKS - Wisata */
        Route::resource('/pmks/budaya', BudayaController::class, ['names' => 'admin.budaya']);
        Route::get('/pmks/budaya/category/{id}', [BudayaController::class, 'category'])->name('admin.budaya.category');
        Route::get('/pmks/budaya/surat/public', [BudayaController::class, 'indexPublic'])->name('admin.budaya.public');
        Route::get('/pmks/budaya/surat/private', [BudayaController::class, 'indexPrivate'])->name('admin.budaya.private');
        Route::controller(CategoryBudayaController::class)->group(function () {
            Route::post('/pmks/budaya/category/store', 'store')->name('admin.budaya.category.store');
            Route::post('/pmks/budaya/category/update/{id}', 'update')->name('admin.budaya.category.update');
            Route::get('/pmks/budaya/category/delete/{id}', 'delete')->name('admin.budaya.category.delete');
        });

        /*** PMKS - Budaya */
        Route::resource('/pmks/wisata', WisataController::class, ['names' => 'admin.wisata']);
        Route::get('/pmks/wisata/category/{id}', [WisataController::class, 'category'])->name('admin.wisata.category');
        Route::get('/pmks/wisata/surat/public', [WisataController::class, 'indexPublic'])->name('admin.wisata.public');
        Route::get('/pmks/wisata/surat/private', [WisataController::class, 'indexPrivate'])->name('admin.wisata.private');
        Route::controller(CategoryWisataController::class)->group(function () {
            Route::post('/pmks/wisata/category/store', 'store')->name('admin.wisata.category.store');
            Route::post('/pmks/wisata/category/update/{id}', 'update')->name('admin.wisata.category.update');
            Route::get('/pmks/wisata/category/delete/{id}', 'delete')->name('admin.wisata.category.delete');
        });

        /*** PMKS - Agama */
        Route::resource('/pmks/agama', AgamaController::class, ['names' => 'admin.agama']);
        Route::get('/pmks/agama/category/{id}', [AgamaController::class, 'category'])->name('admin.agama.category');
        Route::get('/pmks/agama/surat/public', [AgamaController::class, 'indexPublic'])->name('admin.agama.public');
        Route::get('/pmks/agama/surat/private', [AgamaController::class, 'indexPrivate'])->name('admin.agama.private');
        Route::controller(CategoryAgamaController::class)->group(function () {
            Route::post('/pmks/agama/category/store', 'store')->name('admin.agama.category.store');
            Route::post('/pmks/agama/category/update/{id}', 'update')->name('admin.agama.category.update');
            Route::get('/pmks/agama/category/delete/{id}', 'delete')->name('admin.agama.category.delete');
        });

        /*** TRANTIB - Surat */
        Route::resource('/trantib/surat', SuratTrantibController::class, ['names' => 'admin.trantib.surat']);
        Route::get('/trantib/surat/category/{id}', [SuratTrantibController::class, 'category'])->name('admin.trantib.surat.category');
        Route::get('/trantib/surat/public', [SuratTrantibController::class, 'indexPublic'])->name('admin.trantib.surat.public');
        Route::get('/trantib/surat/private', [SuratTrantibController::class, 'indexPrivate'])->name('admin.trantib.surat.private');
        Route::controller(CategorySuratTrantibController::class)->group(function () {
            Route::post('/trantib/surat/category/store', 'store')->name('admin.trantib.surat.category.store');
            Route::post('/trantib/surat/category/update/{id}', 'update')->name('admin.trantib.surat.category.update');
            Route::get('/trantib/surat/category/delete/{id}', 'delete')->name('admin.trantib.surat.category.delete');
        });

        /*** TRANTIB - Dokumentasi */
        Route::resource('/trantib/dokumentasi', DokumentasiTantribController::class, ['names' => 'admin.trantib.dokumentasi']);
        Route::get('/trantib/dokumentasi/category/{id}', [DokumentasiTantribController::class, 'category'])->name('admin.trantib.dokumentasi.category');
        Route::get('/trantib/dokumentasi/public', [DokumentasiTantribController::class, 'indexPublic'])->name('admin.trantib.dokumentasi.public');
        Route::get('/trantib/dokumentasi/private', [DokumentasiTantribController::class, 'indexPrivate'])->name('admin.trantib.dokumentasi.private');
        Route::controller(CategoryDokumentasiTantribController::class)->group(function () {
            Route::post('/trantib/dokumentasi/category/store', 'store')->name('admin.trantib.dokumentasi.category.store');
            Route::post('/trantib/dokumentasi/category/update/{id}', 'update')->name('admin.trantib.dokumentasi.category.update');
            Route::get('/trantib/dokumentasi/category/delete/{id}', 'delete')->name('admin.trantib.dokumentasi.category.delete');
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
