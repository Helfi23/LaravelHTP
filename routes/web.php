<?php

use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiswaController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/salam', function(){
    return "Hello, Welcome to Programming Laravel";
});
Route::get('/ucapan', function(){
    return view('ucapan');
});
Route::get('/nilai', function(){
    return view('nilai');
});
Route::get('/daftar_nilai', function(){
    return view('daftar_nilai');
});
Route::get('/data_siswa',[ SiswaController::class,'dataSiswa']);
Route::get('/dashboard',[DashboardController::class, 'index'])->name('index');