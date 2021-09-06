<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WargaController;

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
// Route::get('form/form', [App\Http\Controllers\WargaController::class, 'index'])->name('warga');
// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
