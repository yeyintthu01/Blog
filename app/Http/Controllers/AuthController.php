<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function create()
    {
        return view('register.create');
    }

    public function store()
    {
        request()->validate([
            'name'=>'required|min:3',
            'username'=>'required',
            'email'=>['required','email'],
            'password'=>'required|min:8'
        ]);
        dd('success');
    }

};
