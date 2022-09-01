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

Route::resource('/', 'App\Http\Controllers\IndexController');
// Route::post('/store', 'App\Http\Controllers\IndexController@store');

// Route::get('/animals/{category}/index',  'App\Http\Controllers\AnimalController@category');
// Route::resource('/animals', 'App\Http\Controllers\AnimalController');
Route::get('/animals/cat/index', 'App\Http\Controllers\AnimalController@cat');
Route::get('/animals/dog/index', 'App\Http\Controllers\AnimalController@dog');
Route::get('/animals/list/index', 'App\Http\Controllers\AnimalController@list');
Route::get('/animals/sponsor/index/{id}', 'App\Http\Controllers\AnimalController@sponsor');
Route::get('/InquiryAboutSponsorship', 'App\Http\Controllers\AnimalController@InquiryAboutSponsorship');
Route::get('/charitableActivities', 'App\Http\Controllers\AnimalController@charitableActivities');

Route::resource('/login', 'App\Http\Controllers\LoginController');
Route::get('/register', 'App\Http\Controllers\LoginController@register');
Route::resource('/user', 'App\Http\Controllers\UserController');


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