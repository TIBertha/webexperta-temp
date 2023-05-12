<?php

use App\Http\Controllers\WebController;
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

Route::get('/', [WebController::class, 'index']);
Route::get('/seleccionar', [WebController::class, 'index']);
Route::get('/busco-trabajo', [WebController::class, 'index']);
Route::get('/cuenta-bancaria', [WebController::class, 'index']);
Route::get('/login', [WebController::class, 'index']);
Route::get('/registro', [WebController::class, 'index']);
Route::get('/privacidad', [WebController::class, 'index']);
Route::get('/condiciones', [WebController::class, 'index']);
Route::get('/reclamos', [WebController::class, 'index']);
Route::get('/requerimiento/{id}', [WebController::class, 'index']);
Route::get('/ficha-trabajadora/{id}', [WebController::class, 'index']);
Route::get('/firma/{id}', [WebController::class, 'index']);
Route::get('/registro-postulante/{id}', [WebController::class, 'index']);
