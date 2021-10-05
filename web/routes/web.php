<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProvinsiController;
use App\Http\Controllers\KabkotaController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\ProdiController;
use App\Http\Controllers\DatawebController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PerusahaanController;
use App\Http\Controllers\PertAlumniController;
use App\Http\Controllers\PertPerusahaanController;
use App\Http\Controllers\HasilAlumniController;
use App\Http\Controllers\HasilPerusahaanController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AuthUserController;



Route::resource('/', DashboardController::class)->names([
    'index'=>'dashboard.user'
]);
// Route::resource('/berita', DashboardController::class)->names([
//     'show'=>'beritasingle.show',
//     'beritaall' => 'beritaall'
// ]);
// Route::get('/', 'App\Http\Controllers\DashboardController@index')->name('dashboard.user');
Route::get('login', 'App\Http\Controllers\AuthUserController@index')->name('login');
Route::get('daftar', 'App\Http\Controllers\AuthUserController@create')->name('daftar');
Route::get('/berita', 'App\Http\Controllers\DashboardController@beritaall')->name('beritaall');
Route::get('/isikuisioner', 'App\Http\Controllers\DashboardController@isikuisionerrr')->name('isikuisionerrr');

Route::get('/berita/{id}', 'App\Http\Controllers\DashboardController@show')->name('beritasingle.show');
Route::get('/berita/{jenisberita}', 'App\Http\Controllers\DashboardController@beritakategori')->name('beritakategori.show');
Route::get('administrator', 'App\Http\Controllers\AuthController@index')->name('administrator');
Route::post('proses_login', 'App\Http\Controllers\AuthController@proses_login')->name('proses_login');
Route::get('logout', 'App\Http\Controllers\AuthController@logout')->name('logout');
Route::prefix('administrator')->middleware(['auth'])->group(function(){
    Route::group(['middleware' => ['cek_login:admin']], function () {

        Route::resource('/dashboard', AdminController::class)->names([
            'index'=>'administrator.dashboard',
        ]);

        Route::resource('/provinsi', ProvinsiController::class)->names([
            'index'=>'provinsi.index',
        ]);
        Route::resource('/kabkota', KabkotaController::class)->names([
            'index'=>'kabkota.index',
            'store' => 'kabkota.store',
            'destroy' => 'kabkota.destroy',
        ]);
        Route::resource('/perusahaan', PerusahaanController::class)->names([
            'index'=>'perusahaan.index',
            'store' => 'perusahaan.store',
            'destroy' => 'perusahaan.destroy',
            'update' => 'perusahaan.update',
        ]);
        Route::resource('/prodi', ProdiController::class)->names([
            'index'=>'prodi.index',
            'store' => 'prodi.store',
            'destroy' => 'prodi.destroy',
            'update' => 'prodi.update',
        ]);
        Route::resource('/berita', BeritaController::class)->names([
            'index'=>'berita.index',
            'destroy' => 'berita.destroy',
            'show' => 'berita.show',
            'store' => 'berita.store',
        ]);
        Route::resource('/dataweb', DatawebController::class)->names([
            'index'=>'dataweb.index',
        ]);
        Route::resource('/editprofil', ProfilController::class)->names([
            'update'=>'editprofil.update',
            'edit' => 'editprofil.edit'
        ]);
        Route::resource('/user', UserController::class)->names([
            'index'=>'user.index',
        ]);
        // Route::get('/berita/{id}', 'App\Http\Controllers\DashboardController@show')->name('beritasingle.show');
        Route::get('/pert_alumni/{kategori}', 'App\Http\Controllers\PertAlumniController@jenispertanyaan')->name('pert_alumni.kategori');
        Route::get('/pert_alumni/detail/{id}', 'App\Http\Controllers\PertAlumniController@ajaxdetail')->name('pert_alumni.ajaxdetail');
        // Route::get('/pert_alumni/detail/{name}', function ($name) { echo($name); });
        // Route::get('/pert_alumni/{name}', function ($name) { echo($name); });
        Route::resource('/pert_alumni', PertAlumniController::class)->names([
            'store' => 'pert_alumni.store',
            'destroy' => 'pert_alumni.destroy',
            'update' => 'pert_alumni.update',
        ]);
        Route::resource('/pert_perusahaan', PertPerusahaanController::class)->names([
            'index'=>'pert_perusahaan.index',
            'destroy' => 'pert_perusahaan.destroy',
        ]);
        Route::resource('/hasil_alumni', HasilAlumniController::class)->names([
            'index'=>'hasil_alumni.index',
            'destroy' => 'hasil_alumni.destroy',
        ]);
        Route::resource('/hasil_perusahaan', HasilPerusahaanController::class)->names([
            'index'=>'hasil_perusahaan.index',
            'destroy' => 'hasil_perusahaan.destroy',
        ]);
        
        // Route::get('/pert_alumni/{kategori}', 'App\Http\Controllers\PertAlumniController@jenispertanyaan');
    });
    Route::group(['middleware' => ['cek_login:prodi']], function () {

        Route::resource('editor', AdminController::class);
    });
});

// Auth::routes();
// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
