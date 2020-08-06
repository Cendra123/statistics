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
    // return view('welcome');
     return redirect('home');
});

Route::get('home',  ['uses' =>'Controller@rute']);
Route::get('home/{id}', ['uses' =>'Controller@rute']);
Route::get('about', ['uses' =>'Controller@about']);
// END OF FILE
