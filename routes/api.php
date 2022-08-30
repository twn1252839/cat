<?php

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

Route::apiResource('/index', 'App\Http\Controllers\IndexController');


// 加入助養
// Route::apiResource('/sponsor', 'App\Http\Controllers\Controller');
// Route::apiResource('/search', 'App\Http\Controllers\Controller');