<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WargaController;
use App\Http\Controllers\RtController;

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
Auth::routes();
Route::get('/', function () {
    return view('form/form');
});


Route::resource('warga', WargaController::class);
Route::get('warga', [WargaController::class, 'index'])->name('warga');
Route::get('wargart', [RtController::class, 'index'])->name('wargart');
Route::get('/create', [WargaController::class, 'create'])->name('create');
Route::get('/show', [WargaController::class, 'show'])->name('show');
Route::post('/store', [WargaController::class, 'store'])->name('store');
// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
