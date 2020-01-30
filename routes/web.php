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


Route::get('/singleton', 'SingCtrl@show');

/* Route::get('/test/{id}', 'TestCtrl@test'); */

Route::get('/factory/{type}', 'FactCtrl@createBrand');

Route::get('/facade/{type}', 'FacaCtrl@Command');

Route::get('/iterator', 'IterCtrl@affichage');

Route::get('/observer', 'ObservCtrl@affichage');

Route::get('/strategy', 'StrategyCtrl@affichage');

Route::get('/command', 'Command@returnView');