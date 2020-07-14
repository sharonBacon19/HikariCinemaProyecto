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

Route::group(['prefix' => 'p1'], function () {
        Route::group(['prefix' => 'auth'], function ($router) {
            Route::post('register', 'AuthController@register');
            Route::post('login', 'AuthController@login');
            Route::post('logout', 'AuthController@logout');
            Route::post('refresh', 'AuthController@refresh');
            Route::post('me', 'AuthController@me');
        });
        Route::group(['prefix' => 'pelicula'], function () {
                Route::get('', 'PeliculaController@index');
                Route::get('all', 'PeliculaController@all');
                Route::get('/{id}', 'PeliculaController@show');
        });
        Route::group(['prefix' => 'producto'], function () {
            Route::get('', 'ProductoController@index');
            Route::get('all', 'ProductoController@all');
            Route::get('/{id}', 'ProductoController@show');
        });
        Route::group(['prefix' => 'genero'], function () {
            Route::get('', 'GeneroController@index');
        });
        Route::group(['prefix' => 'funcion'], function () {
            Route::get('', 'FuncionController@index');
            Route::get('/{id}', 'FuncionController@show');
        });
        Route::group(['prefix' => 'sucursal'], function () {
            Route::get('', 'SucursalController@index');
        });
        Route::group(['prefix' => 'campo'], function () {
            Route::get('', 'CampoController@index');
            Route::get('/{id}', 'CampoController@show');
        });
        Route::group(['prefix' => 'tipoproducto'], function () {
            Route::get('', 'TipoProductoController@index');
        });
        Route::group(['prefix' => 'clasificacionPelicula'], function () {
            Route::get('', 'ClasificacionPeliculaController@index');
        });
        Route::group(['prefix' => 'clasificacionProducto'], function () {
            Route::get('', 'ClasificacionProductoController@index');
        });
});
