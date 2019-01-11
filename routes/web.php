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
Route::get('/home','NewController@index');

Route::resource('store','storecontroller');

Route::get('/name',function (){
    return('Haroon');
});

Route::get('/myroll/{x}', function ($x){
    return('my roll number is: '.$x);
});

Route::view('/myviews','myViewsName');