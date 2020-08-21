<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\product;


Route::group([
    'middleware' => 'api',
    'prefix' => 'auth'

], function ($router) {
    Route::post('login', 'AuthController@login');
    Route::post('register', 'AuthController@register');
    Route::post('logout', 'AuthController@logout');
    Route::post('refresh', 'AuthController@refresh');
    Route::get('user-profile', 'AuthController@userProfile');
});


//CRUD
//fetch all data
Route::apiResource('/product', 'productController');

/*Route::get('/product', 'productController@all');
//fetch single data
Route::get('/product/{product}', 'productController@Read');

Route::post('/product', 'productController@create');

Route::delete('/product/{id}','productController@delete');*/
