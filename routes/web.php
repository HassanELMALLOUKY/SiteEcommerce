<?php

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

Route::get('/home',[\App\Http\Controllers\HomeController::class,'index'])->name('home');
Route::get('/panier/{id}',[\App\Http\Controllers\HomeController::class,'panier'])->name('panier');
//Route::post('/checkout', [App\Http\Controllers\HometController::class, 'payment'])
//    ->name('payment');
