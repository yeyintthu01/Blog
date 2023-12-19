<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;
use App\Models\Blog;

class CommentController extends Controller
{
    public function store(Blog $blog)
    {
        request()->validate([
            'comment'=>'required | min:10'
        ]);

        //comment store
        $blog->comments()->create([
            'body' => request('comment'),
            'user_id' => auth()->id()
        ]);

        return back();
    }
}
