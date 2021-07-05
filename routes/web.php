<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MissionController;
use App\Http\Controllers\OrganisationController;
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
    return view('index');
})->name('home');

Route::get('/', function () {
    return view('index');
});
Route::fallback(function () {
    return view('index');
});

Route::get('/Entreprise', [OrganisationController::class, 'show'])->name('PageEntreprise');

Route::get('/test', [MissionController::class, 'show'])->name('test');