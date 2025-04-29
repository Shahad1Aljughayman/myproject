<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Products;
use App\Http\Controllers\Dashboard;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\ProductsController;

Route::get('/', function () {
    return view('welcome');
})->name('index');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/products',[Products::class,'GetProducts']);

Route::get('/aboutus',[Products::class,'AboutUs'])->name('aboutus');
Route::get('/contactus',[Products::class,'ContactUs'])->name('contactus');
Route::get('/myprod',[Products::class,'MyProducts'])->name('myprod');

Route::get('/dashboard',[Dashboard::class,'Index'])->name('dashboard');

Route::get('/categories',[CategoriesController::class,'Index'])->name('categories.index');
Route::POST('/addcategories',[CategoriesController::class,'Create'])->name('categories.create');
Route::get('/deleteitemcategories/{id}',[CategoriesController::class,'Delete'])->name('categories.delete');
Route::get('/edititemcategories/{id}',[CategoriesController::class,'Edit'])->name('categories.edit');
Route::POST('/updatecategories',[CategoriesController::class,'Update'])->name('categories.update');

Route::get('/products',[ProductsController::class,'Index'])->name('Products.index');
Route::POST('/createproducts',[ProductsController::class,'Create'])->name('Products.create');
Route::get('/deleteproducts/{id}',[ProductsController::class,'Delete'])->name('Products.delete');
Route::get('/edititemproducts/{id}',[ProductsController::class,'Edit'])->name('Products.Edit');
