<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BarangController;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Route::resource('barang', BarangController::class);
Route::get('/barang',[App\Http\Controllers\BrgController::class, 'index'])->name('barang.index');
Route::get('/barang/create', [App\Http\Controllers\BrgController::class, 'create'])->name('barang.create');
Route::post('/barang/store', [App\Http\Controllers\BrgController::class, 'store'])->name('barang.store');
Route::get('/barang/{id}/edit', [App\Http\Controllers\BrgController::class, 'edit'])->name('barang.edit');
Route::post('/barang/{id}/update', [App\Http\Controllers\BrgController::class, 'update'])->name('barang.update');
Route::get('/barang/{id}/delete', [App\Http\Controllers\BrgController::class, 'destroy'])->name('barang.delete');