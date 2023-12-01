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

Route::get("/", function () {
    return view('pages.blog');
})->name('blog');

Route::get("language/{lang}", function ($lang) {
    if (in_array($lang, config('app.locales'))) {
        session()->put('language', $lang);
    }
    return redirect()->back();
})->name('lang');
