<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProvinsiController;
use App\Http\Controllers\KabkotaController;
use App\Http\Controllers\BeritaController;

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
        Route::resource('/provinsi', ProvinsiController::class)->names([
            'index'=>'provinsi.index',
        ]);
        Route::resource('/kabkota', KabkotaController::class)->names([
            'index'=>'kabkota.index',
            'store' => 'kabkota.store',
            'destroy' => 'kabkota.destroy',
            'update' => 'kabkota.update',
        ]);
        Route::resource('/berita', BeritaController::class)->names([
            'index'=>'berita.index',
            'destroy' => 'berita.destroy',
            'show' => 'berita.show',
        ]);
    });
    Route::group(['middleware' => ['cek_login:prodi']], function () {

        Route::resource('editor', AdminController::class);
    });
});

// Auth::routes();
// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
