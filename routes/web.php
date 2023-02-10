<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Login\Login;
use App\Http\Controllers\DashboardController;
use App\Http\Livewire\Absensi\Absensi;
use App\Http\Livewire\Detail\Detail;
use App\Http\Livewire\Gaji\Gaji;
use App\Http\Livewire\Karyawan\Karyawann;

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

// Route::get('/', Login::class)->name('dashboard.dash');

// Route::group(['middleware' =>  'admin'], function () {
// Route::get('/', function () {
//     return view('layout.app');
// });
// });

Route::get('/dashboard', DashboardController::class)->name('dashboard.dash');
Route::get('admin/karyawan', Karyawann::class)->name('karyawan.karyawan');
Route::get('admin/gaji', Gaji::class)->name('gaji.gaji');
Route::get('admin/absensi', Absensi::class)->name('absensi.absensi');
Route::get('admin/detail', Detail::class)->name('detail.detail');
Route::get('admin/detail/tambah', [Detail::class, "tambahdetail"])->name('detail_tambah');
Route::get('cari_karyawan/{karyawan}', [Detail::class, "cari_karyawan"]);
Route::get('cari_kar/{karyawan}', [Absensi::class, "cari_kar"]);
Route::get('cetaknota', [Detail::class, 'cetaknota']);
