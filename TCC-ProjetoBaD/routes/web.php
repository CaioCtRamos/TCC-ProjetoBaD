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

use App\Http\Controllers\DossieController;

Route::get('/', [DossieController::class , 'index']);

Route::get('/dossie/create', [DossieController::class , 'create']);

Route::get('/dossie/{nome}', [DossieController::class , 'show']);

Route::delete('/dossie/{id}', [DossieController::class , 'destroy']);

Route::post('/dossie', [DossieController::class , 'store']);

