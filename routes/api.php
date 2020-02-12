<?php

use Illuminate\Http\Request;


// ログイン
Route::post('/login', 'Auth\LoginController@login')->name('login');

// 会員登録
Route::post('/register', 'Auth\RegisterController@register')->name('register');

// ログアウト
Route::post('/logout', 'Auth\LoginController@logout')->name('logout');