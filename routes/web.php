<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::group(['prefix' => LaravelLocalization::setLocale(),'middleware' => [ 'localeSessionRedirect', 'localizationRedirect' ]], function(){


    Route::group([ 'namespace' => 'WebsiteController', ], function(){
    
    
        //Home Page
        Route::get('/', 'HomeController@index');
        Route::get('product/{id}', 'HomeController@product_pop');// Popup Product In Desktop Version
        Route::get('products/{id}/{slug?}', 'ProductsController@index');//  Products Category Shop 
        Route::get('lilly-products', 'ProductsController@allProducts');//  Products Shop All
        Route::get('product-details/{id}/{slug?}', 'ProductsController@index');//  Product Details 


    
        
    
        
    
    
     });
    
    // Authentication Routes...
    Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
    Route::post('login', 'Auth\LoginController@login');
    
    // Registration Routes...
    Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
    Route::post('register', 'Auth\RegisterController@register');
    
    // Password Reset Routes...
    Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
    Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
    Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
    Route::post('password/reset', 'Auth\ResetPasswordController@reset')->name('password.update');
    
    });
    
    
    
    Route::post('logout', 'Auth\LoginController@logout')->name('logout');
    Route::get('/home', 'HomeController@index')->name('home');
    

