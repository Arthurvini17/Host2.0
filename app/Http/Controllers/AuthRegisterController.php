<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AuthRegisterController extends Controller
{
    public function index(){
        return view("register");
    }

    public function store (Request $request) {

        $request->validate([
            'name' => ['required'],
            'email' => ['required'],
            'password' => ['required']
        ], [
            'name.required' => 'Preencha esse campo com seu nome',
            'email.required'=>['Digite o campo do email'],
            'email' => 'Digite um email valido',
            'password.required' => 'Digite o campo da senha'
        ]);

        $user = New User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->name = $request->name;
        $user->save();
        return redirect()->route("home.index");
    }
}
