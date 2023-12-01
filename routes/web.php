<?php

use Illuminate\Support\Facades\Route;
use App\Models\Blog;

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

 Route::get('/', function () {
    return view('blogs');
  });

  Route::get('/blogs/{blog}', function ($slug) {  
    $blog=Blog::find($slug);
    return view('blog', [
      'blog'=>$blog
    ]); 
  })->where('blog', '[A-z\d\-_]+');
