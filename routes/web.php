<?php

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
// Auth
// Route::get('/login', function () {
//     return view('auth.login');
// })->name('login');

// Route::get('/register', function () {
//     return view('auth.register');
// })->name('register');

// Route::get('/forgot', function () {
//     return view('auth.forgot');
// })->name('forgot');

// Route::get('/reset', function () {
//     return view('auth.reset');
// })->name('reset');


Route::get('/', function () {
    return view('auth.login');
});


Route::middleware(['auth','verified'])->group(function () {
    // HOME DSHBOARD
    Route::get('home', function () {
        // dd(auth()->user());
        return view('dashboard.home');
    })->name('home');

    // SPBU
    Route::get('spbu', function () {
        // dd(auth()->user());
        return view('dashboard.spbu');
    })->name('sbpu');

    // MANAGEMENTS PENGGUNA
    Route::get('pengguna', function () {
        // dd(auth()->user());
        return view('dashboard.pengguna');
    })->name('pengguna');


});


