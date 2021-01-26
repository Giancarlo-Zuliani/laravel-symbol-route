<?php

use Illuminate\Support\Facades\Route;

Route::get('/' ,'mainController@payment') -> name('payment');
Route::get('/pending' , 'mainController@pending') -> name('pending');
