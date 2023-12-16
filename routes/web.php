<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\AuthController;



 Route::get('/',[BlogController::class,'index'] );
 Route::get('/blogs/{blog:slug}',[BlogController::class,'show']);

 Route::get('/register',[AuthController::class,'create'] );
 Route::post('/register',[AuthController::class,'store'] );
 Route::post('/logout',[AuthController::class,'logout'] );
 
 