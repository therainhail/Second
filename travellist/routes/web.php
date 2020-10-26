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
})->name('home');
Route::get('/signin', function () {
    return view('signin');
});
Route::get('/signup', function () {
    return view('signup');
});
Route::post('/signup/sign_up', 'App\Http\Controllers\AuthController@sign_up')->name('cont-form');
Route::post('/signin/sign_in', 'App\Http\Controllers\LogController@sign_in')->name('cont-form1');


Route::resource('users', 'App\Http\Controllers\UserController');