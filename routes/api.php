<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\JogadoresController;
use App\Http\Controllers\TasksController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::get("jogadores",[JogadoresController::class, 'index']);
Route::post("jogadores",[JogadoresController::class, 'store']);
Route::delete("jogadores",[JogadoresController::class, 'delete']);
Route::patch("jogadores/{jogador}",[JogadoresController::class,'update']);

Route::get("admin",[AdminController::class, 'index']);
Route::post("admin",[AdminController::class,'store']);
;
