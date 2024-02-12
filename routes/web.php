<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DaftarController;

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

Route::post('/', [DaftarController::class, 'store'])->name('daftar.store');

Route::get('/get-kampus-by-keyword', [DaftarController::class, 'getKampusByKeyword'])->name('get-kampus-by-keyword');


require __DIR__.'/auth.php';
