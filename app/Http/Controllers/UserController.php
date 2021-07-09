<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Mission;

class UserController extends Controller
{
    public function home(){
        $user=Auth::user();
        //Une mission est terminée quand une ended_at lui est fournis
        $MissionsFinit=Mission::where('ended_at','!=',null)
        ->where('user_id', $user->id)
        ->get();
        $MissionsEnCours=Mission::whereNull('ended_at')
        ->where('user_id', $user->id)
        ->get();
        return view('home',['user'=>$user,'MissionFinit'=>$MissionsFinit,'MissionsEnCours'=>$MissionsEnCours]);
    }

    public function logout()
    {
        Auth::logout();
        Session()->flush();
        return redirect()->route('connexion');
    }
}
