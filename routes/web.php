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

//Twitter詳細プロフページ
Route::get('prof', function () {
    return view('twitter.prof');
});

// OS判定 → 遷移
Route::get('dl', 'AdController@os');