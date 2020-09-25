<?php

use App\Http\Controllers\EchoController;
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

Route::get('/echo', [EchoController::class, 'post']);
Route::post('/echo', [EchoController::class, 'post']);
Route::patch('/echo', [EchoController::class, 'post']);
Route::put('/echo', [EchoController::class, 'post']);
Route::delete('/echo', [EchoController::class, 'post']);
