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

    Route::get('home', 'HomeController@index');
    
    Route::get('wedding','WeddingController@wedding');
    Route::get('weddingdetails','WeddingController@UserEvent');
	Route::post('wedding','WeddingController@store');
    Route::get('wedding/{id}/edit','WeddingController@edit');
    Route::post('wedding/update/{id}','WeddingController@update');
    
    Route::get('invites','InvitesController@invites');
	
    Route::get('/showproducts','WishlistController@showproducts');   
    Route::post('/ajaxwishlist','WishlistController@addproduct');     
    Route::post('/editwishlist','WishlistController@editproduct');     
    Route::post('/updatewishlist','WishlistController@updateproduct');     
    Route::post('/deletewishlist','WishlistController@removeproduct'); 

    Route::get('social/auth/redirect/{provider}', 'Auth\AuthController@redirectToProvider');
    Route::get('social/auth/{provider}', 'Auth\AuthController@handleProviderCallback');
    Route::get('contacts', 'ContactsController@getGoogleContacts');


    
   
});
