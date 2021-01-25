<?php

use Illuminate\Support\Facades\Route;

Route::get('/' , 'mainController@home') -> name('home');
Route::get('/blog' , 'mainController@blog') -> name('blog');
Route::get('/about' , 'mainController@about') -> name('about');
