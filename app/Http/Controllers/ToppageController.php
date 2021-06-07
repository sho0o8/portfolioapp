<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ToppageController extends Controller
{
    // トップページ
    // トップ
    public function top_page(){
        return view ('top_page');
    }
    // サービスについて
    public function about(){
        return view ('about');
    }
    // お問い合わせフォーム
    // 入力画面
    public function contact()
    {
        return view('contact.index');
    }
    // 確認フォーム
    public function confirm(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'body' => 'required',
        ]);
        $inputs = $request->all();
        return view('contact.confirm',['inputs' => $inputs,]);
    }
    // 送信完了
    public function send(Request $request)
    {
        return view('contact.send');
    }
}
