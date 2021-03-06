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

Route::group([
    'middleware' => 'api',
    'prefix' => 'auth'

], function ($router) {

    Route::post('register', 'JWTAuthController@register');
    Route::post('login', 'JWTAuthController@login')->name('login');
    Route::post('logout', 'JWTAuthController@logout');
    Route::post('refresh', 'JWTAuthController@refresh');
    Route::get('profile', 'JWTAuthController@profile');
    /////////////proyectos/////////////////////////////////////////
    Route::post('registerproyecto', 'ProyectoController@register');
    Route::post('getproyectosuser', 'ProyectoController@getProyectosUser');
    ///////////////////////////////////////////////////////////////7
    Route::post('registerrol', 'RolController@register');
    Route::post('registerbacklog', 'BackLogController@register');
    Route::post('registersprint', 'SprintController@register');
    Route::post('registersprintbacklog', 'SprintBackLogController@register');

});
