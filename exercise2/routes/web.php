<?php

use Illuminate\Support\Facades\Route;

Route::get('/' ,'mainController@payment');
Route::get('/pending' , 'mainController@pending');
