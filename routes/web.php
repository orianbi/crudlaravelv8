<?php

use App\Http\Controllers\EmployeeController;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [EmployeeController::class, 'index'])->name('pegawai');
Route::get('/pegawai', [EmployeeController::class, 'index'])->name('pegawai');
Route::get('/tambahDataPegawai', [EmployeeController::class, 'tambahDataPegawai'])->name('tambahDataPegawai');
Route::post('/prosesTambahDataPegawai', [EmployeeController::class, 'prosesTambahDataPegawai'])->name('prosesTambahDataPegawai');
Route::get('/editDataPegawai/{id}', [EmployeeController::class, 'editDataPegawai'])->name('editDataPegawai');
Route::post('/prosesEditDataPegawai/{id}', [EmployeeController::class, 'prosesEditDataPegawai'])->name('prosesEditDataPegawai');
Route::get('/hapus/{id}', [EmployeeController::class, 'hapusDataPegawai'])->name('hapus');