<?php

Route::get(
    '/',
    function () {
        return view('welcome');
    }
)->name('index');

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();