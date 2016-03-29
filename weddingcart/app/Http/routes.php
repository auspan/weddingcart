<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});

Route::group(['middleware' => 'web'], function () {
    Route::auth();

    Route::get('/home', 'HomeController@index');
    Route::get('/wedding','WeddingController@wedding');
    Route::get('/weddingdetails','WeddingController@UserEvent');
	Route::post('/wedding','WeddingController@store');
    Route::get('/wedding/{id}/edit','WeddingController@edit');
    Route::post('/wedding/update','WeddingController@update');
    // store product into user wishlist
    Route::post('/wishlist/add','WishlistController@store_product_into_wishlist');
    // end of stronig product into user wishlist
	Route::get('/wishlist','WishlistController@wishlist');
    Route::get('/invites','WishlistController@invites');
	Route::get('/create_wishlist','WishlistController@create');
    Route::post('/wishlist','WishlistController@store');

    
    Route::get('/makewishlist','WishlistController@makewishlist');
    
    
    Route::get('/showwishlist','WishlistController@showwishlist');

    Route::get('social/auth/redirect/{provider}', 'Auth\AuthController@redirectToProvider');
    Route::get('social/auth/{provider}', 'Auth\AuthController@handleProviderCallback');

});
