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
    return view('fb.adran'); //出会いweb(iOS)
    
    // return redirect('https://fam-ad.com/ad/p/r?_site=64801&_article=21253'); //オトマチ直友達追加リダイレクト - iOS
    // return redirect('https://fam-ad.com/ad/p/r?_site=64801&_article=21253'); //直友達追加リダイレクト - iOS
    // return redirect('https://fam-ad.com/ad/p/r?_site=64801&_article=21252'); //友達追加リダイレクト - iOS
    // return view('fb.adult'); //アダルト - LINE@誘導
    // return redirect('https://a-trade.jp/redirect/moa?media=G16531'); //モア - Aトレード
    // return redirect('https://a-trade.jp/redirect/popo?media=G16531'); //PoPo - Aトレード
});

// OS識別
Route::get('os', 'AdController@os');

//確認用
Route::get('cccheck', function () {
    return view('fb.adran'); //出会いweb(iOS)

    // return redirect('https://fam-ad.com/ad/p/r?_site=64801&_article=21253'); //オトマチ直友達追加リダイレクト - iOS
    // return redirect('https://fam-ad.com/ad/p/r?_site=64801&_article=21252'); //友達追加リダイレクト - iOS
    // return view('fb.adult'); //アダルト - LINE@誘導
    // return redirect('https://a-trade.jp/redirect/moa?media=G16531'); //モア - Aトレード
});

// //獲得用
// Route::get('app11', function () {
//     return view('fb.check'); //提出用
//     // return redirect('https://fam-ad.com/ad/p/r?_site=64801&_article=21193'); //直友達追加リダイレクト - And
//     // return redirect('https://fam-ad.com/ad/p/r?_site=64801&_article=21192'); //友達追加リダイレクト - And
// });

// Twitter詳細プロフページ
Route::get('prof', 'AdController@prf');

// // OS判定 → 遷移 ※TikTok集客で使用中！
// Route::get('dl', 'AdController@os');