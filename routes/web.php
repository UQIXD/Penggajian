<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Livewire\Login\Login;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Livewire\Absensi\Absensi;
use App\Http\Livewire\Detail\Detail;
use App\Http\Livewire\Gaji\Gaji;
use App\Http\Livewire\Karyawan\Karyawann;
use App\Http\Livewire\Potongan\Potongan;

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

Route::get('/', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/', [LoginController::class, 'authenticate'])->name('/');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/dashboard', DashboardController::class)->name('dashboard.dash');

Route::get('admin/karyawan', Karyawann::class)->name('karyawan.karyawan');

Route::get('admin/gaji', Gaji::class)->name('gaji.gaji');

Route::get('admin/potongan', Potongan::class)->name('potongan.potongan');

Route::get('admin/absensi', Absensi::class)->name('absensi.absensi');

Route::get('admin/detail', Detail::class)->name('detail.detail');
Route::get('admin/detail/tambah', [Detail::class, "tambahdetail"])->name('detail_tambah');
Route::post('admin/detail/eDetambah', [Detail::class, "createDet"])->name('save_detail');
Route::get('admin/detail/rubah/{detail}', [Detail::class, "rubahdetail"])->name('detail_rubah');
Route::put('admin/detail/rubah/{detail}', [Detail::class, "editDet"])->name('save_rubah');
Route::delete('admin/detail/hapus/{detail}', [Detail::class, "hapusdetail"])->name('hapus_detail');

Route::get('cari_karyawan/{absensi}', [Detail::class, "cari_karyawan"]);
Route::get('cari_potongan/{potongan}', [Detail::class, "cari_potongan"]);
Route::get('cari_kar/{karyawan}', [Absensi::class, "cari_kar"]);
Route::get('cari_karya/{karyawan}', [Gaji::class, "cari_karya"]);
Route::get('cetaknota', [Detail::class, 'cetaknota']);
// Route::get('/pegawai/cetak_pdf', 'PegawaiController@cetak_pdf');
