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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', "App\Http\Controllers\HomeController@index");
Route::get('/home', "App\Http\Controllers\HomeController@index");
Route::get('/login', "App\Http\Controllers\HomeController@loginPage");
Route::get('/logout', "App\Http\Controllers\HomeController@logout");
Route::get('/signup', "App\Http\Controllers\HomeController@signUpPage");
Route::post('/usr/signup', "App\Http\Controllers\HomeController@register");
Route::post('/usr/auth', "App\Http\Controllers\HomeController@authenticate");

Route::get('/dashboard', "App\Http\Controllers\DashboardController@index");

Route::any('/dashboard/{slug}',function(){
    return view("welcome");
});