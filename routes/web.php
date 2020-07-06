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

Route::get('/', ['as'=>'home','uses'=>'IndexController@showMain']) ;
Route::get('/page',['uses'=>'TestController@show','as'=>'page']);
Route::get('/auth',['uses'=>'indexController@showAuth','as'=>'auth']);
Route::match(['get','post'],'/contact',['uses'=>'indexController@showCont','as'=>'contact']);













