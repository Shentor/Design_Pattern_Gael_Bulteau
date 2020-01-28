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



Route::get('/test', 'TestController@test');
Route::get('/test/{id}', 'TestController2@testId');

Route::get('/singleton', 'ControllerSingleton@affichage');
Route::get('/factory', 'ControllerFactory@affichage');
Route::get('/facade', 'ControllerFacade@affichage');
Route::get('/iterator', 'ControllerIterator@affichage');
Route::get('/observer', 'ControllerObserver@affichage');
Route::get('/strategy', 'ControllerStrategy@affichage');
Route::get('/template', 'ControllerTemplate@affichage');
Route::get('/command', 'ControllerCommand@affichage');
Route::get('/composite', 'ControllerComposite@affichage');

//Route::get('user/{tel?}', function($tel=null){
//    return $tel;
//});

//Route::get('user/{tel}' function($tel=null){
//});

