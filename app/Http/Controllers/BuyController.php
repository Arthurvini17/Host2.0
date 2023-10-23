<?php

namespace App\Http\Controllers;

use App\Models\Planos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BuyController extends Controller
{
    public function index()
    {
        return view("compras");
    }

    public function store(Request $request)
    {

        $plano = new Planos();
        $plano->name = $request->input('name');
        $plano->save();


        $user = Auth::user();
        $user->plano_id = $plano->id;
        $user->save();

        return redirect()->route('home.index');
    }
}
