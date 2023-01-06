<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;



Route::view('/','home');
// Route::view('products','products');
Route::post('/save',[ProductController::class,'savedata']);
Route::get('/products',[ProductController::class,'index']);


