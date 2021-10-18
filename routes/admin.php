<?php 
// Admin Route
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::group(['namespace' => 'AdminController', 'middleware' => 'auth', 'prefix' => 'websolla-db'], function(){
    Route::group(['prefix' => LaravelLocalization::setLocale()], function(){

        Route::get(         '/',            'SlidersController@index'    );//index
        Route::resource(    'sliders',      'SlidersController'          );//Slider controller
 
    });

});

Auth::routes();