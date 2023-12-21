<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\AdminBlogController;



 Route::get('/',[BlogController::class,'index'] );
 Route::get('/blogs/{blog:slug}',[BlogController::class,'show']);

 Route::post('/blogs/{blog:slug}/comments',[CommentController::class, 'store']);

 Route::get('/register',[AuthController::class,'create'])->middleware('guest');
 Route::post('/register',[AuthController::class,'store'])->middleware('guest');
 Route::post('/logout',[AuthController::class,'logout'])->middleware('auth');

 Route::get('/login',[AuthController::class,'login'])->middleware('guest');
 Route::post('/login',[AuthController::class,'post_login'])->middleware('guest');

 Route::post('/blogs/{blog:slug}/subscription', [BlogController::class, 'subscriptionHandler']);


 Route::get('/admin/blogs', [AdminBlogController::class,'index'])->middleware('admin');
 Route::get('/admin/blogs/create', [AdminBlogController::class,'create'])->middleware('admin');
 Route::post('/admin/blogs/store', [AdminBlogController::class,'store'])->middleware('admin');

 Route::delete('/admin/blogs/{blog:slug}/delete', [AdminBlogController::class,'destroy'])->middleware('admin');

 