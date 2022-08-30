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

Route::get('/', function () {
  return view('index');
});

Route::resource('/cat', 'App\Http\Controllers\CatController');
// Route::resource('/dog', 'App\Http\Controllers\DogController');
// Route::resource('/list', 'App\Http\Controllers\ListController');

// Route::middleware(['auth', 'second'])->group(function () {
// });

// Route::group(['prefix' => 'auth', 'namespace' => 'App\Http\Controllers'], function () {
//   Route::get('/', 'AuthController@me')->name('me');
//   Route::post('login', 'AuthController@login')->name('login');
//   Route::post('logout', 'AuthController@logout')->name('logout');
// });

//在裏頭擺放要被保護的路由們
// Route::middleware('auth:api')->group(function () {
// });