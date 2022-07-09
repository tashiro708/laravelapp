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

Route::get('/', function () {
    return view('welcome');
});

//顧客
//ログイン画面
Route::get('login','Auth\User\LoginController@showLoginForm')->name('login');
//ログイン機能
Route::post('login','Auth\User\LoginController@login');
//新規登録画面
Route::get('register','Auth\User\RegisterController@showRegistrationForm')->name('register');
//新規登録機能
Route::post('register','Auth\User\RegisterController@register');
//ログアウト機能
Route::post('logout','Auth\User\LoginController@logout')->name('logout');
