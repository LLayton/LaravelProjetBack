<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MissionController;
use App\Http\Controllers\OrganisationController;
use App\Http\Controllers\MissionLinesController;
use App\Http\Controllers\SocialiteController;
use App\Http\Controllers\UserController;
use Laravel\Socialite\Facades\Socialite;

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

Route::middleware('guest')->group(function () {
    Route::get("/login/redirect/google", [SocialiteController::class,'redirectGoogle'])->name('google.redirect');
    Route::get("/login/callback/google", [SocialiteController::class,'callbackGoogle'])->name('google.callback');
    Route::get("/",  function () {return view('connexion');})->name('connexion');

    Route::get('/login/redirect/github',[SocialiteController::class,'redirectGithub'])->name('github.redirect');
    Route::get('/login/callback/github',[SocialiteController::class,'callbackGithub'])->name("github.callback");
});

Route::middleware('auth')->group(function () {
Route::get('/home', [UserController::class,'home'])->name('home');
Route::get('/logout', [UserController::class,'logout'])->name('logout');


Route::get('/Entreprise', [OrganisationController::class, 'show'])->name('PageEntreprise');
Route::post('/Entreprise', [OrganisationController::class, 'store']);
//Route::delete('/Entreprise', [OrganisationController::class, 'destroy']);

Route::get('/Mission', [MissionController::class, 'show'])->name('PageMission');
Route::post('/Mission', [MissionController::class, 'store']);
Route::delete('/Mission', [MissionController::class, 'destroy']);

Route::get('/MissionLine',[MissionLinesController::class,'show'])->name('InsertionLigne');
Route::post('/MissionLine',[MissionLinesController::class,'store']);
Route::delete('/MissionLine',[MissionLinesController::class,'destroy']);

});


// La redirection vers le provider

Route::fallback(function () {
    return view('home');
});