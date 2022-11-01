<?php

use App\Http\Controllers\RouteController;
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


Route::get('/', [RouteController::class, 'index']);
Route::get('portfolio', [RouteController::class, 'portfolio'])->name('portfolio');
Route::get('/quote', [RouteController::class, 'getQuote'])->name('quote');

