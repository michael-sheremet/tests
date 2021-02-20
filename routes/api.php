<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::prefix('users')->name('users.')->namespace('App\Http\Controllers\Api')->group(function() {
    Route::post('import', 'UserController@import')->name('import');
});

Route::prefix('companies')->name('companies.')->namespace('App\Http\Controllers\Api')->group(function() {
    Route::post('', 'CompanyController@index')->name('index');
});
