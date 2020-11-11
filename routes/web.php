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

Route::get('/polling-unit/new', 'PollingUnitController@newPollingUnitView');

Route::post('/pollingunit/new', 'PollingUnitController@addNewPollingUnit');

Route::get('/results/polling-unit/{unit_id?}', 'PollingUnitController@getResults');

Route::get('/results/lgas/{lga_id?}', 'LgaController@getResults');