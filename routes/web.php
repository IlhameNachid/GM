<?php

use Illuminate\Support\Facades\Route;


/*
Route::get('/', function () {
    return view('inventaires.acceuil');
});*/

use App\Http\Controllers\Invent;

Route::resource('/inventaires',Invent::class);
// web.php
Route::get('/etablissement', 'Invent@afficherPageAjout')->name('etablissement');
Route::get('/in', function () {
    return view('inventaires.index');
});
use App\Http\Controllers\Clogin;
use App\Http\Controllers\Materielle;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;Route::group(['middleware' => 'guest'], function () {
    Route::get('/register', [AuthController::class, 'register'])->name('register');
    Route::post('/register', [AuthController::class, 'registerPost'])->name('register');
    Route::get('/login', [AuthController::class, 'login'])->name('login');
    Route::post('/login', [AuthController::class, 'loginPost'])->name('login');
});
 
Route::group(['middleware' => 'auth'], function () {
    Route::get('/home', [HomeController::class, 'index']);
    Route::delete('/logout', [AuthController::class, 'logout'])->name('logout');
});
Route::get('/bureau',function(){
    return view('inventaires.bureau');
});