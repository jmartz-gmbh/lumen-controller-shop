<?php

use Illuminate\Support\Facades\Route;

Route::get('/shop/view/{id}', [
    'middleware' => [],
    'uses' => 'App\Http\Controllers\ShopController@view'
]);

Route::get('/shops', [
    'middleware' => [],
    'uses' => 'App\Http\Controllers\ShopController@all'
]);
