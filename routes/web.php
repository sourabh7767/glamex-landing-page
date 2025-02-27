<?php

use App\Http\Controllers\ContactUs;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NewsLetterController;
use App\Http\Middleware\SetLocale;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->middleware(SetLocale::class);
Route::resource('contact', ContactUs::class);
Route::resource('news', NewsLetterController::class);

Route::get('set-locale/', [HomeController::class,"setLocale"])->name('set.locel');
