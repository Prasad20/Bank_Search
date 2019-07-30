<?php

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


Route::get('/welcome',function ()
{
    return view('bank_welcome');
});


//Route::get('/bank','bank_controller@show');

Route::get('/bank_id_create',function ()
{
    return view('bank_id_create');
});


Route::resource('/bank_id','bank_id_controller');