<?php
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\pengenalanController;
use App\Http\Controllers\latihanduaController;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');
Route::get('Input', [HomeController::class, 'Input'])->middleware('auth')->name('Input');
Route::get('Pelanggan', [HomeController::class, 'Pelanggan'])->middleware('auth')->name('Pelanggan');
Route::get('Seni', [HomeController::class, 'Seni'])->middleware('auth')->name('Seni');
Route::get('/latihan', [pengenalanController::class, 'index'])->name('latihan');
Route::get('/latihandua', [latihanduaController::class, 'index'])->name('latihandua');
require __DIR__.'/auth.php';