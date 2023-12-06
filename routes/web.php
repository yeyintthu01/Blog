<?php

use Illuminate\Support\Facades\Route;
use App\Models\Blog;
use App\Models\Category;

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
    return view('blogs', [
      'blogs'=>Blog::all()
    ]);
  });

  Route::get('/blogs/{blog:slug}', function (Blog $blog) {  
    return view('blog', [
      'blog'=>$blog
    ]); 
  })->where('blog', '[A-z\d\-_]+');

  Route::get('/categories/{category:slug}', function (Category $category) {
    return view('blogs', [
      'blogs'=>$category->blogs
    ]);
  });
