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

Route::get('lodge/index','LodgeController@index')->name('lodge.index');
Route::get('lodge/create','LodgeController@create')->name('lodge.create');
Route::post('lodge/store','LodgeController@store')->name('lodge.store');