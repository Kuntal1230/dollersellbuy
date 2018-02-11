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

Route::get('/','HomeController@index')->name('home');
Route::get('/contact-us','HomeController@ContuctUs')->name('contactus');

Auth::routes();

Route::get('/sell-currency','CurrencyController@SellCurrency')->name('sellcurrency');
Route::get('/buy-currency','CurrencyController@BuyCurrency')->name('buycurrency');
Route::get('/exchange-currency','CurrencyController@ExchangeCurrency')->name('exchangecurrency');

// Admin Routes
Route::get('/admin-login','Admin\LoginController@showLoginForm')->name('admin.login');
Route::post('/admin-login','Admin\LoginController@login');
Route::get('/admin-password/reset','Admin\ForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
Route::post('/admin-password/email','Admin\ForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
Route::get('/admin-password/reset/{token}','Admin\ResetPasswordController@showResetForm')->name('admin.password.reset');
Route::post('/admin-password/reset','Admin\ResetPasswordController@reset');

Route::get('/dashboard','AdminController@index')->name('dashboard');
