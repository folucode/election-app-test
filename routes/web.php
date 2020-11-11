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
});

Route::get('/pu-results', 'PollingUnitController@getResults');

Route::get('/lga-results', 'LgaController@getResults');

Route::get('/pollingunit/new', 'PollingUnitController@newPollingUnitView');

Route::post('/pollingunit/new', 'PollingUnitController@addNewPollingUnit');