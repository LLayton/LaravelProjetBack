<?php

namespace App\Http\Controllers;

use App\Models\User;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SocialiteController extends Controller
{
    public function redirectGoogle(){
        return Socialite::driver(driver:'google')->redirect();
    } 
    public function callbackGoogle(){
        $user = Socialite::driver('google')->user();
            $userFounded = User::updateOrCreate(
                ['email' =>  $user->user['email']],
                [
                    'name' => $user->user['given_name'] .' '.$user->user['family_name'],
                    'email' => $user->user['email'],
                ]
            );
            Auth::login($userFounded, true);
            return redirect()->route('home');
    }    
    public function redirectGithub(){
        return Socialite::driver(driver:'github')->redirect();
    } 
    public function callbackGithub(){
        $user= Socialite::driver(driver:'github')->user();
        $userFounded = User::updateOrCreate(
            ['email' =>  $user->user['email']],
            [
                'name' => $user->getName()?? $user->getNickname(),
                'email' => $user->getEmail(),
            ]
        );
        Auth::login($userFounded,true);
        return redirect()->route('home');
    }
}
