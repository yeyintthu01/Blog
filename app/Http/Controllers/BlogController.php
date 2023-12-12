<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\Category;

class BlogController extends Controller
{
    public function index() {
        $blogs=Blog::latest();
        if (request('search'))
        {
            $blogs=$blogs->where('title', 'LIKE', '%'.request('search').'%')
                         ->orWhere('body','LIKE', '%'.request('search').'%');
        }
          return view('blogs', [
            'blogs'=>$blogs->get(), //eager load //lazy loading
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
