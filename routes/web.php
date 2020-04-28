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



Route::get('/','FrontendController@index')->name('index');
Route::get('/our-service','FrontendController@ourservice');
Route::get('/franchises','FrontendController@franchises');
Route::get('/contact-us','FrontendController@contactus');
Route::get('/view','FrontendController@data');
Route::resource('layouts','ContactsController');


Route::get('/view', 'FrontendController@view')->name('view');
Route::get('/edit/{id}', 'FrontendController@edit')->name('edit');
Route::post('/update/{id}', 'FrontendController@update')->name('update');
Route::delete('/delete/{id}', 'FrontendController@delete')->name('delete');


Route::group(['middleware' => 'guest'], function(){
    Route::get('/register', 'Auth\RegisterController@showRegistrationForm')->name('register');
    Route::post('/register', 'Auth\RegisterController@register');
    Route::get('/login', 'Auth\LoginController@showLoginForm')->name('login');
    Route::post('/login', 'Auth\LoginController@login');

     Route::post('/passwords/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
    Route::get('/passwords/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
    Route::post('/passwords/reset', 'Auth\ResetPasswordController@reset');
    Route::get('/passwords/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');

});

Route::group(['middleware' => 'auth'], function (){
    Route::get('/home', 'HomeController@index')->name('home');
    Route::post('/logout', function (){
        \Auth::logout();
        return redirect(route('login'));
    })->name('logout');



});

