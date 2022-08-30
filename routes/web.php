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
  return view('welcome');
});

// Route::resource('/cat', 'App\Http\Controllers\CatController');
// Route::resource('/dog', 'App\Http\Controllers\DogController');
// Route::resource('/list', 'App\Http\Controllers\ListController');

Route::middleware(['auth', 'second'])->group(function () {
});