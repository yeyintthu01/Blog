<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\Category;

class BlogController extends Controller
{
    public function index() {
        
          return view('blogs', [
            'blogs'=>Blog::latest()->filter(request(['search']))->get(), //eager load //lazy loading
            'categories'=>Category::all()
          ]);
    }

    public function show(Blog $blog) {  
        return view('blog', [
          'blog'=>$blog,
          'randomBlogs'=>Blog::inRandomOrder()->take(3)->get(),
          'categories'=>Category::all()
        ]); 
    }
}
