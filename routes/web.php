<?php

use App\Http\Controllers\PlayerController;
use App\Http\Controllers\PokemonController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\TypeController;
use App\Models\Pokemon;
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
    return view('welcome',[
        'pokemon'=>Pokemon::all()
    ]);
});
Route::resource('types',TypeController::class);
Route::resource('pokemon',PokemonController::class);