<?php

use Illuminate\Http\Request;

Route::post('auth/register', ['as' => 'auth.register', 'uses' => 'Api\AuthController@register']);
Route::post('auth/social/{provider}', ['as' => 'auth.social', 'uses' => 'Api\AuthController@social']);
Route::post('auth/login', ['as' => 'auth.login', 'uses' => 'AuthControllerApi\@login']);
Route::post('auth/logout', ['as' => 'auth.logout', 'uses' => 'AuthControllerApi\@logout']);
