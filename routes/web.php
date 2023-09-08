<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;

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
    return view('auth.login');
});

Route::group(['prefix'=>'/register'],function(){
    Route::get('/register',  [RegisterController::class, 'index'])->name('register');
    Route::post('/register',  [RegisterController::class, 'store'])->name('registered');

    });

    Route::group(['prefix'=>'/login'],function(){
        Route::get('/login',  [LoginController::class, 'index'])->name('login');
        Route::post('/login',  [LoginController::class, 'login'])->name('logedin');
        Route::get('/dashboard', [LoginController::class, 'show'])->middleware('auth')->name('user.dashboard');
        Route::post('/logout',  [LoginController::class, 'logout'])->name('logout');
        });
    
