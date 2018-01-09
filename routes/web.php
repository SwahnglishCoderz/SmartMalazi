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
    Route::post('/','LoginController@postLogin')->name('login.visitors');
    Route::get('/forgot-password','ForgotPasswordController@forgotPassword');
    Route::post('/forgot-password','ForgotPasswordController@postForgotPassword');

    Route::get('/reset/{email}/{resetCode}','ForgotPasswordController@resetPassword');
    Route::post('/reset/{email}/{resetCode}','ForgotPasswordController@postResetPassword');
});

//admin links
Route::group(['middleware' => 'admin'], function (){
    Route::get('/register','RegistrationController@register');
    Route::post('/register','RegistrationController@postRegister');

    Route::get('/lodges','LodgeController@index')->name('lodges.index');
    Route::get('/lodges/create','LodgeController@create')->name('lodges.create');
    Route::post('/lodges/store','LodgeController@store')->name('lodges.store');
    Route::post('/lodges/update/{id}','LodgeController@update');

    Route::get('/lodges/delete/{id}','LodgeController@delete')->name('lodges.delete');
    Route::get('/lodges/show/{id}','LodgeController@show')->name('lodges.show');
    Route::get('/lodges/edit/{id}','LodgeController@edit')->name('lodges.edit');

    Route::get('/admin','AdminController@index')->name('admin.index');
});

//lodge admin links

Route::group(['middleware' => 'lodge-admin'], function (){
    Route::get('/lodge-admin','LodgeAdminController@index');
});

Route::get('/activate/{email}/{activationCode}','ActivationController@activate') ;