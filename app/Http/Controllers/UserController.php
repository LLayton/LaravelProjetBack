<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function home(){
        $user=Auth::user();
        return view('home',['user'=>$user]);
    }

    public function logout()
    {
        Auth::logout();
        Session()->flush();
        return redirect()->route('connexion');
    }
}
