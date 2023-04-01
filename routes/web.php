<?php

use App\Http\Controllers\UrlController;
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

Route::get('/', function () {
    if (auth()->user()) {
        return view('home.index');
    }
    return view('index');
});
Route::get('/login', function () {
    return view('auth.index');
});
Route::get('/register', function () {
    return view('auth.create');
});
Route::post('/login', [UserController::class, 'index'])->name('login');
Route::post('/register', [UserController::class, 'create'])->name('register');
Route::get('/logout', [UserController::class, 'logout']);

Route::post('/create', [UrlController::class , "create"]);
Route::get('/{url}', [UrlController::class , "show"]);
Route::post('/clear', [UrlController::class , "clear"]);
