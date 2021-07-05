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

Route::prefix('admin')->name('admin.')->namespace('Admin')->group(function (){
    Route::prefix('inicio')->name('inicio.')->group(function (){

        Route::get('/', 'FirstPageController@index')->name('index');
        Route::get('/create', 'FirstPageController@create')->name('create');
        Route::post('/store', 'FirstPageController@store')->name('store');
        Route::get('/{inicio}/edit', 'FirstPageController@edit')->name('edit');
        Route::post('/update/{inicio}', 'FirstPageController@update')->name('update');

    });
});

Route::get('/inicio', function () {
    return \App\Models\Inicio::all();
});
