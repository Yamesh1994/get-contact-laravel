<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

Route::group(['namespace' => 'yamesh\login\Http\Controllers'], function () {
    Route::get('contact', 'ContactController@index');
    Route::post('contact/store', 'ContactController@store');
});

