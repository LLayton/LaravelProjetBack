<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MissionController;
use App\Http\Controllers\OrganisationController;
use App\Http\Controllers\MissionLinesController;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
})->name('home');


Route::fallback(function () {
    return view('home');
});

Route::get('/Entreprise', [OrganisationController::class, 'show'])->name('PageEntreprise');
Route::post('/Entreprise', [OrganisationController::class, 'store']);

Route::get('/Mission', [MissionController::class, 'show'])->name('PageMission');
Route::post('/Mission', [MissionController::class, 'store']);

Route::post('/MissionLine',[MissionLinesController::class,'store'])->name('InsertionLigne');
Route::get('/MissionLine', [MissionLinesController::class, 'show']);


Route::get('/login/redirect',function(){
    return Socialite::driver(driver:'github')->redirect();
});
Route::get('/login/callback',function(){
    $user= Socialite::driver(driver:'github')->user();
    $UserDb=User::where(['email'=>$user->getEmail()])->firstOrNew(['email'=>$user->getEmail()]);

    $UserDb->fill([
          "name"=>$user->getName()?? $user->getNickname(),
        "email"=>$user->getEmail(),
    ])->save();
    Auth::login($UserDb);
    return redirect('/');
});