<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdController extends Controller
{
    //
    public function prf(Request $request) {
        $user_agent =  $request->header('User-Agent');
        if ((strpos($user_agent, 'iPhone') !== false)) {
            return view('twitter.prof'); //ツイフィールLPへ
        } elseif ((strpos($user_agent, 'Android') !== false)) {
            return view('twitter.prof'); //ツイフィールLPへ
        }
        return redirect('https://preaf.jp/pa.do?s=v04451&o=45765&guid=ON'); //トークウィズ - preaf - Google広告_testへ(PCからLP見せない設定)
    }
    
    public function os(Request $request) {
        $user_agent =  $request->header('User-Agent');
        if ((strpos($user_agent, 'iPhone') !== false)) {
            return redirect('https://fam-ad.com/ad/p/dt?_site=64802&_loc=246369&_mstype=99'); //ワクワク(男性訴求) - fam
        }
        return redirect('https://fam-ad.com/ad/p/dt?_site=64802&_loc=246369&_mstype=99'); //ワクワク(男性訴求) - fam
    }
}
