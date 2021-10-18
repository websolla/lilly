<?php 
// Admin Route
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::group(['namespace' => 'AdminController', 'middleware' => 'auth', 'prefix' => 'websolla-db'], function(){
    Route::group(['prefix' => LaravelLocalization::setLocale()], function(){

        Route::get(         '/',            'SlidersController@index'    );//index
        /* ______________________________________________________________________________________ */
        Route::resource(    'sliders',      'SlidersController'          );//Slider controller
        /* ______________________________________________________________________________________ */
         Route::resource(    'blogs',        'BlogsController'            );//blogs controller
        /* ______________________________________________________________________________________ */
        Route::resource(    'translates',   'TranslateController'        );// translate
        /* ______________________________________________________________________________________ */
        Route::resource(    'pages',        'PagesController'            );//Pages controller
       
 
    });

});

Auth::routes();