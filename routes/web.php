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

//Route::inertia('/', 'Welcome');
Route::get('/')->name('welcome')->uses('App\Http\Controllers\WelcomeController@index');
Route::get('/about')->name('welcome')->uses('App\Http\Controllers\WelcomeController@index');
