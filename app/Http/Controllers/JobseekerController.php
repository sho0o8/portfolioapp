<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JobseekerController extends Controller
{
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
            'birthday' => 'required',
            'job' => 'required',
            'tell' => 'required | numeric | digits_between:8,11',
            'mail' => 'required|email',
            'terms' => 'required',
        ]);
        $inputs = $request->all();
        return view('job_seeker.confirm',['inputs' => $inputs,]);
    }
    // 応募完了画面
    public function apply_thanks()
    {
        return view('job_seeker.thanks');
    }
    // プロフィール画面
    public function job_profile(){
        return view('job_seeker.profile');
    }
    public function job_change(){
        return view('job_seeker.change');
    }
}
