<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class AuthLoginController extends Controller
{
    public function index()
    {
        return view("login");
    }

    public function auth(Request $request)
    {

        $credentials = $request->validate([
            'email' =>  ['required', 'email'],
            'password' => ['required'],
        ],
        [
            'email.required' => 'Esse campo tem que ser preenchido',
            'email' => 'Digite um email valido',
            'password.required' => 'Esse campo tem que ser preenchido'
        ]);
   

        if (Auth::attempt($credentials, $request->remember)) {
            $request->session()->regenerate();

            return redirect()->route("home.index");
        } else {
            return redirect()->back()->with("error","email ou senha invalido");
        }
    }

  
    

}
