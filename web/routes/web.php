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

Route::get('/', function () {
    return view('dashboard');
});
Route::get('administrator', 'App\Http\Controllers\AuthController@index')->name('administrator');
Route::post('proses_login', 'App\Http\Controllers\AuthController@proses_login')->name('proses_login');
Route::get('logout', 'App\Http\Controllers\AuthController@logout')->name('logout');
Route::prefix('administrator')->middleware(['auth'])->group(function(){
    Route::group(['middleware' => ['cek_login:admin']], function () {

        Route::resource('/dashboard', AdminController::class)->names([
            'index'=>'administrator.dashboard',
        ]);
        Route::resource('/daftaruser', DaftaruserController::class)->names([
            'index'=>'daftaruser.index',
        ]);
        Route::resource('/alumni', AlumniController::class)->names([
            'index'=>'alumni.index',
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
            'store' => 'berita.store'
        ]);
        Route::resource('/dataweb', DatawebController::class)->names([
            'index'=>'dataweb.index',
        ]);
        Route::resource('/editprofil', ProfilController::class)->names([
            'index'=>'editprofil.index',
        ]);
        Route::resource('/user', UserController::class)->names([
            'index'=>'user.index',
        ]);
    });
    Route::group(['middleware' => ['cek_login:prodi']], function () {

        Route::resource('editor', AdminController::class);
    });
});

// Auth::routes();
// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
