<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\API\UserController;
use App\Http\Controllers\HomeController;

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
Route::get('/about', function () {
    return view('about');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/free', function () {
    return view('free');
});
Route::get('/premium', function () {
    return view('premium');
});
Route::get('/login', function () {
    return view('login');
});
Route::get('/register', function () {
    return view('register');
});
Route::get('/dashboard', function () {
    return view('layouts.dashboard');
});


//Route::get('/home', 'HomeController@index')->name('home');
//Route::get('{path}','HomeController@index')->where( 'path', '([A-z\d\-/_.]+)?' );
//Route::post('login', [ 'as' => 'login', 'uses' => 'Auth/LoginController@login']);
//Route::post('login', [LoginController::class, 'login'])->name('login');


Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

