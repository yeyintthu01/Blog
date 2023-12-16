<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Validation\Rule;

class AuthController extends Controller
{
    public function create()
    {
        return view('register.create');
    }

    public function store()
    {
        $formData=request()->validate([
            'name'=>'required|min:3',
            'username'=>['required','max:255','min:3',Rule::unique('users','username')],
            'email'=>['required','email',Rule::unique('users','email')],
            'password'=>'required|min:8'
        ]);
        
        User::create($formData);

        return redirect('/');
    }

};
