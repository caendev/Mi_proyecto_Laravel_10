<?php

use App\Http\Controllers\CarteleraController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\EstrenoController;
use App\Http\Controllers\PromocionController;
use App\Http\Controllers\ProximamenteController;
use App\Models\Cartelera;
use Illuminate\Database\Schema\IndexDefinition;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/cartelera', [CarteleraController::class, 'index']);

Route::get('/estreno', [EstrenoController::class, 'index']);

Route::get('/proximamente', [ProximamenteController::class, 'index']);

Route::get('/promocion', [PromocionController::class, 'index']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', function() {
    return view('home');
})->name('home')->middleware('auth');
