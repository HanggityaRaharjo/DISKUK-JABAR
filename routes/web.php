<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminHeroController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AdminBeritaController;
use App\Http\Controllers\AdminGaleriController;
use App\Http\Controllers\AdminLaporanController;
use App\Http\Controllers\DataKoperasiController;
use App\Http\Controllers\AdminRegulasiController;
use App\Http\Controllers\AdminDataKoperasiController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
// Guest
Route::get('/',[HomeController::class, 'index'])->middleware(['guest']);
Route::get('/profil-dinas',[HomeController::class, 'profil_dinas'])->middleware(['guest']);
Route::get('/bidang-kerja',[HomeController::class, 'bidang_kerja'])->middleware(['guest']);
Route::get('/regulasi',[HomeController::class, 'regulasi'])->middleware(['guest']);
Route::get('/laporan',[HomeController::class, 'laporan'])->middleware(['guest']);
Route::get('/data-koperasi',[HomeController::class, 'data_koperasi']);
Route::get('/ppid',[HomeController::class, 'ppid'])->middleware(['guest']);
Route::get('/permohonan-ppid',[HomeController::class, 'permohonan_ppid'])->middleware(['guest']);
Route::post('/formulir-permohonan-ppid',[HomeController::class, 'store_permohonan_ppid'])->middleware(['guest']);

// Auth/Admin
Route::get('/dashboard',[DashboardController::class, 'index'])->middleware(['auth'])->name('dashboard');
Route::get('/admin-berita',[DashboardController::class, 'admin_berita'])->middleware(['auth']);
Route::get('/admin-regulasi',[DashboardController::class, 'admin_regulasi'])->middleware(['auth']);
Route::get('/admin-galeri',[DashboardController::class, 'admin_galeri'])->middleware(['auth']);
Route::get('/admin-data-koperasi',[DashboardController::class, 'admin_data_koperasi'])->middleware(['auth']);
Route::get('/admin-data-user',[DashboardController::class, 'admin_data_user'])->middleware(['auth']);
Route::get('/admin-ppid',[DashboardController::class, 'admin_ppid'])->middleware(['auth']);
Route::get('/admin-laporan',[DashboardController::class, 'admin_laporan'])->middleware(['auth']);
Route::get('admin-formulir-ppid/{id}',[DashboardController::class, 'admin_formulir_ppid'])->middleware(['auth']);

// Hero & Carousel
Route::post('/admin-hero/store', [AdminHeroController::class, 'store'])->middleware(['auth']);
Route::post('/admin-carousel/store', [AdminHeroController::class, 'carousel_store'])->middleware(['auth']);
Route::delete('/admin-hero/delete/{id}',[AdminHeroController::class, 'destroy'])->middleware(['auth']);

// Data Koperasi
Route::post('/admin-data-koperasi/store', [AdminDataKoperasiController::class, 'store'])->middleware(['auth']);
Route::delete('/admin-data-koperasi/delete/{id}',[AdminDataKoperasiController::class, 'destroy'])->middleware(['auth']);
Route::get('/admin-data-koperasi/{tahun}',[AdminDataKoperasiController::class, 'admin_data_koperasi_tahun']);
Route::get('/data-koperasi/{tahun}',[DataKoperasiController::class, 'data_koperasi_tahun']);


// Berita
Route::get('/admin-berita/edit/{id}', [AdminBeritaController::class, 'update'])->middleware(['auth']);
Route::post('/admin-berita/store', [AdminBeritaController::class, 'store'])->middleware(['auth']);
Route::delete('/admin-berita/delete/{id}',[AdminBeritaController::class, 'destroy'])->middleware(['auth']);

// Galeri
Route::post('/store/galeri', [AdminGaleriController::class, 'store'])->middleware(['auth']);
Route::delete('/delete/galeri/{id}',[AdminGaleriController::class, 'destroy'])->middleware(['auth']);

// Laporan & Transparansi Anggaran
Route::post('/admin-laporan/laporan/create', [AdminLaporanController::class, 'store'])->middleware(['auth']);
Route::get('/admin-laporan/transparansi-anggaran', [AdminLaporanController::class, 'transparansi_anggaran'])->middleware(['auth']);


// Regulasi
Route::post('/store/regulasi', [AdminRegulasiController::class, 'store'])->middleware(['auth']);
Route::delete('/delete/regulasi/{id}', [AdminRegulasiController::class, 'destroy'])->middleware(['auth']);
Route::get('/admin-regulasi/regulasi-pusat', [DashboardController::class, 'regulasi_pusat'])->middleware(['auth']);
Route::get('/admin-regulasi/regulasi-daerah', [DashboardController::class, 'regulasi_daerah'])->middleware(['auth']);


Route::get('/test',function (){
    return view('email_templates');
});

require __DIR__.'/auth.php';
