<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Products;

Route::get('/', function () {
    return view('welcome');
})->name('index');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/products',[Products::class,'GetProducts']);

Route::get('/aboutus',[Products::class,'AboutUs'])->name('aboutus');
Route::get('/contactus',[Products::class,'ContactUs'])->name('contactus');
Route::get('/myprod',[Products::class,'MyProducts'])->name('myprod');
