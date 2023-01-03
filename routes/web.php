<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Login\Login;
use App\Http\Controllers\DashboardController;
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
// Route::get('admin/barang', BarangList::class)->name('admin.barang');

// Route::get('admin/menu', Menu::class)->name('admin.menu');
