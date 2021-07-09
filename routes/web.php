<?php

use Illuminate\Support\Facades\Route;
use App\Models\Inicio;

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

Route::get('/', function () {
    $inicio = \App\Models\Inicio::all();

    if (!empty($inicio[0])) {
        $inicio = \App\Models\Inicio::all();
        $data['inico'] = $inicio[0];
    } else {
        dd('Por favor rodar o comando php artisan db:seed');
    }


    $card = \App\Models\Card::all();
    $data['cards'] = $card;

    return view('site.index', compact('data'));
});

Route::group(['middleware' => ['auth']], function (){

    Route::prefix('admin')->name('admin.')->namespace('Admin')->group(function (){
        Route::prefix('inicio')->name('inicio.')->group(function (){

            Route::get('/', 'FirstPageController@index')->name('index');
            Route::get('/create', 'FirstPageController@create')->name('create');
            Route::post('/store', 'FirstPageController@store')->name('store');
            Route::get('/{inicio}/edit', 'FirstPageController@edit')->name('edit');
            Route::put('/update/{inicio}', 'FirstPageController@update')->name('update');
            Route::delete('/destroy/{inicio}/', 'FirstPageController@destroy')->name('destroy');

        });

        Route::prefix('card')->name('card.')->group(function (){

            Route::get('/', 'SecondPageController@index')->name('index');
            Route::get('/create', 'SecondPageController@create')->name('create');
            Route::post('/store', 'SecondPageController@store')->name('store');
            Route::get('/{card}/edit', 'SecondPageController@edit')->name('edit');
            Route::put('/update/{card}', 'SecondPageController@update')->name('update');
            Route::delete('/destroy/{card}/', 'SecondPageController@destroy')->name('destroy');

        });
    });


});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
