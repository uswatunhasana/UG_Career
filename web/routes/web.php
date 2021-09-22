<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProvinsiController;
use App\Http\Controllers\KabkotaController;

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
            'destroy' => 'provinsi.destroy',
        ]);
        Route::resource('/kabkota', KabkotaController::class)->names([
            'index'=>'kabkota.index',
            'destroy' => 'kabkota.destroy',
        ]);
    });
    Route::group(['middleware' => ['cek_login:prodi']], function () {

        Route::resource('editor', AdminController::class);
    });
});

// Auth::routes();
// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
