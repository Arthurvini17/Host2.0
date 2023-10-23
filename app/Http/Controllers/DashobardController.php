<?php

namespace App\Http\Controllers;

use App\Models\Planos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashobardController extends Controller
{
    public function index() {
        $user = Auth::user();
        $plano = $user->plano;
        return view("dashboard", ["plano" => $plano]);
    }
}
