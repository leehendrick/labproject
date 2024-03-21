<?php

use App\Http\Controllers\CursoController;
use App\Http\Controllers\DuracaoController;
use App\Http\Controllers\HorarioController;
use App\Http\Controllers\InscricoesController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::resource('cursos', CursoController::class);
Route::resource('inscricoes', InscricoesController::class);
Route::resource('horarios', HorarioController::class);
Route::resource('duracaos',DuracaoController::class);