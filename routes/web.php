<?php

use App\Models\Personnel;
use Illuminate\Routing\Route as RoutingRoute;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Route::get('demander/id', [\App\Http\Controllers\PersonnelController::class, 'demandeConge'])->name('personnel.demander');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::resource('services', \App\Http\Controllers\ServiceController::class);

Route::resource('etatConge', \App\Http\Controllers\EtatCongeController::class);

Route::resource('interesse', \App\Http\Controllers\InteresseController::class);

Route::resource('personnel', \App\Http\Controllers\PersonnelController::class);

Route::resource('travail', \App\Http\Controllers\TravailController::class);
