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

Route::get('hello','HelloController@index');

// Route::get('hello', function () { p62ルートの設定でテンプレートを表示する
//     return view('hello.index');
// });

// Route::get('hello', 'HelloController@index') ;p52 request response

// Route::get('hello/other', 'HelloController@other') ;p46 複数のアクションメゾット

// Route::get('hello/{id?}/{pass?}', 'HelloController@index') ;p44 ルートパラメーターの利用

// Route::get('/', function () { 
//     return view('welcome');
// });


