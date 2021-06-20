<?php

use Illuminate\Support\Facades\Route;

Route::get('/shop/view/{key}', [
    'middleware' => [],
    'uses' => 'App\Http\Controllers\ShopController@key'
]);

Route::get('/shop/{id}', [
    'middleware' => [],
    'uses' => 'App\Http\Controllers\ShopController@id'
]);

Route::get('/shops', [
    'middleware' => [],
    'uses' => 'App\Http\Controllers\ShopController@all'
]);
