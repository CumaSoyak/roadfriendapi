<?php

use Illuminate\Http\Request;

Route::post('auth/register', ['as' => 'auth.register', 'uses' => 'AuthController@register']);
Route::post('auth/social/{provider}', ['as' => 'auth.social', 'uses' => 'AuthController@social']);
Route::post('auth/login', ['as' => 'auth.login', 'uses' => 'AuthController@login']);
Route::post('auth/logout', ['as' => 'auth.logout', 'uses' => 'AuthController@logout']);

Route::get('city', ['as' => 'cities', 'uses'  => 'CityController@index']);

Route::get('trips', ['as' => 'trips', 'uses' => 'TripController@index']);

Route::group(['middleware' => 'auth:api'], function () {
    Route::resource('trips', 'TripController', ['only' => 'store']);

    // User
    Route::get('user/trips', ['as' => 'user.trips', 'uses' => 'UserController@trips']);
});
