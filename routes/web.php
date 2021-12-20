<?php

use App\Http\Controllers\SiswaController;
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

Route::get('/', function () {
    return view('welcome');
});
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', [SiswaController::class, 'index'])->name('dashboard');
Route::middleware(['auth:sanctum', 'verified'])->get('/tambah', [SiswaController::class, 'create'])->name('tambah');
Route::post('/tambah', [SiswaController::class, 'store'])->name('simpan');
Route::get('/edit/{id}', [SiswaController::class, 'edit'])->name('edit');
Route::post('/update/{id}', [SiswaController::class, 'update'])->name('update');
Route::get('/delete/{id}', [SiswaController::class, 'destroy'])->name('delete');
