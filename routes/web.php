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

Route::post('/logout','LoginController@logout');

//error-routes
Route::get('/not-allowed','ErrorController@notAllowed');

//visitors links
Route::group(['middleware' => 'visitors'], function (){

    Route::get('/','LoginController@login');
    Route::post('/login','LoginController@postLogin')->name('login.visitors');
    Route::get('/forgot-password','ForgotPasswordController@forgotPassword');
    Route::post('/forgot-password','ForgotPasswordController@postForgotPassword');

    Route::get('/reset/{email}/{resetCode}','ForgotPasswordController@resetPassword');
    Route::post('/reset/{email}/{resetCode}','ForgotPasswordController@postResetPassword');
});

//admin links
Route::group(['middleware' => 'admin'], function (){
    //Route::get('/admin','AdminController@index')->name('admin.index');
	Route::get('/register','RegistrationController@register');
	Route::post('/register','RegistrationController@postRegister');

    Route::post('/update/{user_id}','ViewLodgeAdminTableController@update');
    Route::get('/delete/{user_id}','ViewLodgeAdminTableController@delete');

    Route::get('/lodges','LodgeController@index')->name('lodges.index');
    Route::get('/lodges/create','LodgeController@create')->name('lodges.create');
    Route::post('/lodges/store','LodgeController@store')->name('lodges.store');
    Route::post('/lodges/update/{id}','LodgeController@update');
    Route::get('/lodges/delete/{id}','LodgeController@delete')->name('lodges.delete');
    Route::get('/lodges/show/{id}','LodgeController@show')->name('lodges.show');
    Route::get('/lodges/edit/{id}','LodgeController@edit')->name('lodges.edit');

    Route::get('/enable/{id}','LodgeController@enable');
    Route::get('/disable/{id}','LodgeController@disable');

});

//lodge admin links

Route::group(['middleware' => 'lodge-admin'], function (){
    Route::get('/lodge-admin','LodgeAdminController@index');
});

Route::group(['middleware' => 'both-users'], function (){
    Route::get('/rooms/{lodge_id}','RoomController@index')->name('rooms.index');
    Route::post('/rooms/store','RoomController@store')->name('rooms.store');
    Route::get('/rooms/create/{lodge_id}','RoomController@create')->name('rooms.create');
    Route::post('/rooms/update/{lodge_id}/{room_id}','RoomController@update');
    Route::get('/rooms/delete/{lodge_id}/{room_id}','RoomController@delete')->name('rooms.delete');
    Route::get('/rooms/edit/{lodge_id}/{room_id}','RoomController@edit')->name('rooms.edit');

    Route::get('/notoccupied/{lodge_id}/{room_id}','RoomController@notoccupied');
    Route::get('/occupied/{lodge_id}/{room_id}','RoomController@occupied');

    Route::get('/imageupload/create/{lodge_id}','CreateAlbumController@create')->name('imageupload.create');
    Route::post('/imageupload/store','CreateAlbumController@store');
    Route::post('/imageupload/modal','AddPictureModelController@store');
    Route::get('/album/index/{lodge_id}/{room_id}','ViewAlbumController@index')->name('album.index');

    Route::delete('/imagedelete/{id}', 'ViewAlbumController@delete');
});

Route::get('/activate/{email}/{activationCode}','ActivationController@activate') ;
