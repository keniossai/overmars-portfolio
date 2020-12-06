<?php

use App\Http\Controllers\HomeController;

Route::get('/index', [HomeController::class,'index'])->name('index');
Route::get('/portfolio', [HomeController::class, 'portfolio'])->name('portfolio');

Route::get('/', function () {
    return view('index');
});
