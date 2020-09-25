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

Route::get('/echo', [EchoController::class, 'echo']);
Route::post('/echo', [EchoController::class, 'echo']);
Route::patch('/echo', [EchoController::class, 'echo']);
Route::put('/echo', [EchoController::class, 'echo']);
Route::delete('/echo', [EchoController::class, 'echo']);
