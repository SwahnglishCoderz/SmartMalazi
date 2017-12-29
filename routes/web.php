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

Route::get('','PagesController@index');
Auth::routes();

Route::get('/dashboard', 'DashboardController@index')->name('dashboard');

Route::get('custom/register','CustomAuthController@showRegisterForm')->name('custom.register');
Route::post('custom/register','CustomAuthController@register');

Route::get('custom/login','CustomAuthController@showLoginForm')->name('custom.login');
Route::post('custom/login','CustomAuthController@login');

Route::get('admin/lodges/index','LodgeController@index')->name('lodges.index');
Route::get('admin/lodges/create','LodgeController@create')->name('lodges.create');
Route::post('admin/lodges/store','LodgeController@store')->name('lodges.store');
Route::post('admin/lodges/update/{id}','LodgeController@update')->name('lodges.update');
Route::get('admin/lodges/show/{id}','LodgeController@show')->name('lodges.show');
Route::get('admin/lodges/edit/{id}','LodgeController@edit')->name('lodges.edit');
Route::get('admin/lodges/delete/{id}','LodgeController@delete')->name('lodges.delete');

Route::get('admin/index','CustomAuthController@returntohome')->name('admin.index');

