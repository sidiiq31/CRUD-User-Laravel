<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HelloWorldController;
use App\Http\Controllers\LatihanController;
use App\Http\Controllers\UserDataController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('helloworld', [HelloWorldController::class,'index']);
Route::get('ambilfile', [HelloWorldController::class,'ambilFile']);
Route::get('getlorem', [HelloWorldController::class,'getlorem']);
Route::get('gettabel', [LatihanController::class, 'getTabel'])
     ->name('latihan.tabel');
Route::get('getform', [LatihanController::class, 'getForm'])
     ->name('latihan.form');
Route::get('/', function () {
     return redirect()->route('users.index');
});
Route::resource('users', UserDataController::class);