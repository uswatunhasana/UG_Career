<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProvinsiController;
use App\Http\Controllers\KabkotaController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\ProdiController;
use App\Http\Controllers\DatawebController;
use App\Http\Controllers\DataAlumniController;
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
    'index' => 'dashboard.user'
]);
// Route::resource('/berita', DashboardController::class)->names([
//     'show'=>'beritasingle.show',
//     'beritaall' => 'beritaall'
// ]);
// Route::get('/', 'App\Http\Controllers\DashboardController@index')->name('dashboard.user');
Route::get('login', 'App\Http\Controllers\AuthUserController@index')->name('login.index');
Route::get('registrasi', 'App\Http\Controllers\AuthUserController@registrasi')->name('daftar.registrasi');
Route::get('lupa_password', 'App\Http\Controllers\AuthUserController@lupa_password')->name('lupapassword.lupa_password');
Route::post('/post_lupa_password', 'App\Http\Controllers\AuthUserController@post_lupa_password')->name('post_lupa_password');
Route::post('password_update', 'App\Http\Controllers\AuthUserController@password_update')->name('password_update');
Route::post('simpanregistrasi', 'App\Http\Controllers\AuthUserController@simpanregistrasi')->name('simpanregistrasi');
Route::post('store', 'App\Http\Controllers\AuthUserController@store')->name('store');
Route::post('postlogin', 'App\Http\Controllers\AuthUserController@postlogin')->name('postlogin');
Route::get('log_out', 'App\Http\Controllers\AuthUserController@log_out')->name('log_out');
Route::get('/berita', 'App\Http\Controllers\DashboardController@beritaall')->name('beritaall');
Route::get('/berita', 'App\Http\Controllers\DashboardController@beritaall')->name('beritaall');
// Route::get('/isikuisioneralumni/{id}', 'App\Http\Controllers\KuisionerController@isikuisionercontoh')->name('isikuisioneralumni');
Route::get('/isikuisioneralumni/{id}', 'App\Http\Controllers\KuisionerController@isikuisioneralumni')->name('isikuisioneralumni');
Route::get('/getkabkota/{id}', 'App\Http\Controllers\KuisionerController@ajaxkabkota');
// Route::get('/getkabkota', [KuisionerController::class, 'getKabkota']);
Route::get('/isikuisionerperusahaan/{id}', 'App\Http\Controllers\KuisionerController@isikuisionerperusahaan')->name('isikuisionerperusahaan');
Route::post('/isikuisionerperusahaan/store', 'App\Http\Controllers\KuisionerController@kuisionerperusahaanstore')->name('kuisionerperusahaan.store');
Route::post('/isikuisioneralumni/store', 'App\Http\Controllers\KuisionerController@kuisioneralumnistore')->name('kuisioneralumni.store');
Route::get('/isikuisionercontoh', 'App\Http\Controllers\DashboardController@isikuisionercontoh');
Route::get('/editprofil_front/{id}', 'App\Http\Controllers\ProfilController@editprofil_front')->name('editprofil_front');
Route::post('/updateprofil/{id}', 'App\Http\Controllers\ProfilController@updateprofil')->name('updateprofil');
Route::get('/editprofilperusahaan/{id}', 'App\Http\Controllers\ProfilController@editprofilperusahaan')->name('editprofilperusahaan');
Route::post('/updateprofilperusahaan/{id}', 'App\Http\Controllers\ProfilController@updateprofilperusahaan')->name('updateprofilperusahaan');

Route::get('/berita/{id}', 'App\Http\Controllers\DashboardController@show')->name('beritasingle.show');
Route::get('/berita/{jenisberita}', 'App\Http\Controllers\DashboardController@beritakategori')->name('beritakategori.show');
Route::get('administrator', 'App\Http\Controllers\AuthController@index')->name('administrator');
Route::get('administrator', 'App\Http\Controllers\AuthController@index')->name('login');
Route::post('proses_login', 'App\Http\Controllers\AuthController@proses_login')->name('proses_login');
Route::get('logout', 'App\Http\Controllers\AuthController@logout')->name('logout');

Route::prefix('administrator')->middleware(['auth'])->group(function () {
    Route::group(['middleware' => ['cek_login:admin']], function () {

        Route::resource('/dashboard', AdminController::class)->names([
            'index' => 'administrator.dashboard',
        ]);
        // Route::get('/dataalumni','App\Http\Controllers\UserController@dataalumni')->nama('dataalumni');
        Route::resource('/provinsi', ProvinsiController::class)->names([
            'index' => 'provinsi.index',
        ]);
        Route::resource('/kabkota', KabkotaController::class)->names([
            'index' => 'kabkota.index',
            'store' => 'kabkota.store',
            'destroy' => 'kabkota.destroy',
        ]);
        Route::resource('/perusahaan', PerusahaanController::class)->names([
            'index' => 'perusahaan.index',
            'store' => 'perusahaan.store',
            'destroy' => 'perusahaan.destroy',
            'update' => 'perusahaan.update',
        ]);
        Route::resource('/prodi', ProdiController::class)->names([
            'index' => 'prodi.index',
            'store' => 'prodi.store',
            'destroy' => 'prodi.destroy',
            'update' => 'prodi.update',
        ]);
        // Route::get('/search', 'App\Http\Controllers\BeritaController@search');
        Route::get('/berita/{kategori}', 'App\Http\Controllers\BeritaController@jenisberita')->name('berita.kategori');
        Route::get('/berita/detail/{id}', 'App\Http\Controllers\BeritaController@ajaxdetail')->name('berita.ajaxdetail');
        Route::resource('/berita', BeritaController::class)->names([
            'destroy' => 'berita.destroy',
            'show' => 'berita.show',
            'store' => 'berita.store',
        ]);
        Route::resource('/dataweb', DatawebController::class)->names([
            'index' => 'dataweb.index',
        ]);
        Route::resource('/editprofil', ProfilController::class)->names([
            'update' => 'editprofil.update',
            'edit' => 'editprofil.edit'
        ]);
        Route::resource('/user', UserController::class)->names([
            'index' => 'user.index',
        ]);

        Route::resource('/dataalumni', DataAlumniController::class)->names([
            'index' => 'dataalumni.index',
            'destroy' => 'dataalumni.destroy',
        ]);

        // Route::get('/berita/{id}', 'App\Http\Controllers\DashboardController@show')->name('beritasingle.show');
        Route::get('/pert_alumni/{kategori}', 'App\Http\Controllers\PertAlumniController@jenispertanyaan')->name('pert_alumni.kategori');
        Route::get('/pert_alumni/detail/{id}/{is_cabang}', 'App\Http\Controllers\PertAlumniController@ajaxdetail')->name('pert_alumni.ajaxdetail');
        // Route::get('/pert_alumni/detail/{name}', function ($name) { echo($name); });
        // Route::get('/pert_alumni/{name}', function ($name) { echo($name); });
        Route::resource('/pert_alumni', PertAlumniController::class)->names([
            'store' => 'pert_alumni.store',
            'destroy' => 'pert_alumni.destroy',
            'update' => 'pert_alumni.update',
        ]);
        Route::get('/pert_perusahaan/{kategori}', 'App\Http\Controllers\PertPerusahaanController@jenispertanyaan')->name('pert_perusahaan.kategori');
        Route::get('/pert_perusahaan/detail/{id}/{is_cabang}', 'App\Http\Controllers\PertPerusahaanController@ajaxdetail')->name('pert_perusahaan.ajaxdetail');
        Route::resource('/pert_perusahaan', PertPerusahaanController::class)->names([
            'store' => 'pert_perusahaan.store',
            'destroy' => 'pert_perusahaan.destroy',
            'update' => 'pert_perusahaan.update',
        ]);
        Route::resource('/pert_perusahaan', PertPerusahaanController::class)->names([
            'store' => 'pert_perusahaan.store',
            'destroy' => 'pert_perusahaan.destroy',
            'update' => 'pert_perusahaan.update',
        ]);
        Route::get('/hasil_alumni', 'App\Http\Controllers\HasilRespondenController@hasilalumni')->name('hasil_alumni');
        Route::get('/hasil_alumni/export', 'App\Http\Controllers\HasilRespondenController@exportalumni')->name('hasil_alumni.export');
        Route::post('/hasil_alumni/import', 'App\Http\Controllers\HasilRespondenController@importalumni')->name('hasil_alumni.import');

        Route::delete('/hasil_alumni/delete/{id}', 'App\Http\Controllers\HasilRespondenController@destroy')->name('delete_responden.alumni');
        Route::delete('/hasil_perusahaan/delete/{id}', 'App\Http\Controllers\HasilRespondenController@destroy')->name('delete_responden.perusahaan');
        Route::get('/hasil_perusahaan', 'App\Http\Controllers\HasilRespondenController@hasilperusahaan')->name('hasil_perusahaan');
        
        // Route::resource('/hasil_alumni', HasilAlumniController::class)->names([
        //     'index' => 'hasil_alumni.index',
        //     'destroy' => 'hasil_alumni.destroy',
        // ]);
        // Route::resource('/hasil_perusahaan', HasilPerusahaanController::class)->names([
        //     'index' => 'hasil_perusahaan.index',
        //     'destroy' => 'hasil_perusahaan.destroy',
        // ]);

        // Route::get('/pert_alumni/{kategori}', 'App\Http\Controllers\PertAlumniController@jenispertanyaan');
    });
    Route::group(['middleware' => ['cek_login:prodi']], function () {

        Route::resource('editor', AdminController::class);
    });
    // FRONT END
    Route::group(['middleware' => ['auth', 'ceklevel:alumni']], function () {

        Route::resource('/isikuisioner', DashboardController::class)->names([
            'isikuisioneralumni' => 'isikuisioner.isikuisionerrr',
        ]);

        

        // Route::resource('/edit-profil', ProfilController::class)->names([
        //     'editprofil' => 'edit-profil.editprofil'
        // ]);
    });
});

// Auth::routes();
// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
