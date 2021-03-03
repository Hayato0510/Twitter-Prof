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
//獲得用
Route::get('app1', function () {
    // return view('fb.check'); //提出用
    return redirect('https://a-trade.jp/redirect/moa?media=G16531'); //モア - Aトレード
    
    // return redirect('https://a-trade.jp/redirect/popo?media=G16531'); //PoPo - Aトレード
});

//確認用
Route::get('cccheck', function () {
    return redirect('https://a-trade.jp/redirect/moa?media=G16531'); //モア - Aトレード
});

// Twitter詳細プロフページ
Route::get('prof', 'AdController@prf');

// OS判定 → 遷移 ※TikTok集客で使用中！
Route::get('dl', 'AdController@os');