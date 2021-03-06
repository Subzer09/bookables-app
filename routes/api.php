<?php

use App\Http\Controllers\Api\BookableController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//Route::get('bookables', [BookableController::class, 'index']);
//Route::get('bookable/{id}', [BookableController::class, 'show']);

Route::apiResource('bookables', BookableController::class)->only('index', 'show');
