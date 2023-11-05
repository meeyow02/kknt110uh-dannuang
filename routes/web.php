<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\InfoController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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

Route::get('/registrasi', [UserController::class, 'indexRegis']);
Route::post('/registrasi', [UserController::class, 'store']);

Route::get('/login', [UserController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [UserController::class, 'authenticate']);
Route::post('/logout', [UserController::class, 'logout']);

Route::get("/", HomeController::class)->name('beranda');
Route::resource("info", InfoController::class);
Route::resource("/post", PostController::class)->middleware('auth');

Route::get('/profil', function () {
    return view('profil', [
        'title' => 'Profil'
    ]);
})->name('profil');

Route::get('/tentang', function () {
    return view('tentang', [
        'title' => 'Tentang'
    ]);
})->name('tentang');

