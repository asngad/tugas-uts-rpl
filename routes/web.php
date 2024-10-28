<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LatihanController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [LatihanController::class, 'index'])->name('home');

Route::get('/latihan', [LatihanController::class, 'index'])->name('latihans.index');
Route::get('/latihan/create', [LatihanController::class, 'create'])->name('latihans.create');
Route::post('/latihan', [LatihanController::class, 'store'])->name('latihans.store');
Route::get('/latihan/{latihan}', [LatihanController::class, 'show'])->name('latihans.show');
Route::get('/latihan/{latihan}/edit', [LatihanController::class, 'edit'])->name('latihans.edit');
Route::put('/latihan/{latihan}', [LatihanController::class, 'update'])->name('latihans.update');
Route::delete('/latihan/{latihan}', [LatihanController::class, 'destroy'])->name('latihans.destroy');
