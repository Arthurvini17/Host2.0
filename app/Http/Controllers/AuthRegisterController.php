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
        $user = New User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->save();
        return redirect()->route("home.index");
    }
}
