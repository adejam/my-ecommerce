<?php

use Illuminate\Support\Facades\Route;

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

Route::get(
    '/',
    function () {
        return view('welcome');
    }
);

Route::get(
    '/login-with-recovery-code',
    function () {
        return view('auth.recovery-code');
    }
)->name('recovery-code');

Route::middleware(['auth', 'verified'])->group(
    function () {
        Route::get("/home", fn () => view('user.home'))->name('home');
        Route::get("/profile", fn () => view('user.profile.profile'))->name('profile');
    }
);
