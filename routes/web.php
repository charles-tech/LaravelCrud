<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\FluxoCaixaController;
use App\Http\Controllers\NavigationController;
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

//Route::get('/', function () {
//    return view('home');
//});





Route::get('/controle-pf',[NavigationController::class,'controlepf'])->name(name:'controlepf');
Route::get('/financiamento-pf',[NavigationController::class,'financiamentopf'])->name(name:'financiamentopf');
Route::get('/',[NavigationController::class,'welcome'])->name(name:'welcome');

//Route::get('/controle-pf',[FluxoCaixaController::class,'index']);
Route::get('/controle-pf',[FluxoCaixaController::class,'where']);
Route::post('/controle-pf',[FluxoCaixaController::class,'store']);



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

