<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BsController;

Route::get('/bible-study-requests', 'App\Http\Controllers\BsController@index');

Route::get('/bible-study-request-form', 'App\Http\Controllers\BsController@form');

Route::post('/bible-study-request-form', 'App\Http\Controllers\BsController@details')->name('request.details');

Route::get('/thank-you', 'App\Http\Controllers\BsController@thanks');