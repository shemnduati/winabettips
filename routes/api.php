<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\UserController;
use App\Http\Controllers\API\GameController;
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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('profile', [UserController::class, 'profile']);
//Route::put('profile', [UserController::class, 'updateProfile']);
Route::apiResource('user', UserController::class);
Route::get('user',[UserController::class,'index']);
Route::get('fixtures', [GameController::class, 'fetch']);
Route::get('findgames', [GameController::class, 'search']);
Route::post('games', [GameController::class, 'store']);