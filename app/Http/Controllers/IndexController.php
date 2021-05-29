<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    // トップページ
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
    // 送信フォーム
    public function send(Request $request)
    {
        return view('contact.send');
    }
    // 求職者側
    // マイページ
    public function job_main(Request $request){
        return view('job_seeker.main');
    }
    // ログアウト
    public function logout(){
        return view('job_seeker.logout');
    }
    // 応募フォーム
    // 入力画面
    public function job_apply()
    {
        return view('job_seeker.apply');
    }
    // 確認フォーム
    public function apply_confirm(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'furigana' => 'required',
            'tell' => 'required | numeric | digits_between:8,11',
            'email' => 'required|email',
            'age' => 'required|integer',
            'terms' => 'required',
        ]);
        $inputs = $request->all();
        return view('job_seeker.confirm',['inputs' => $inputs,]);
    }
    public function apply_thanks()
    {
        return view('job_seeker.thanks');
    }
}
