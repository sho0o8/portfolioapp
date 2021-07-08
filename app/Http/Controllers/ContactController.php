<?php

namespace App\Http\Controllers;

use App\Mail\Contact;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    // お問い合わせフォーム
    // 入力画面
    public function input()
    {
        return view('contact.input');
    }
    // 確認フォーム
    public function confirm(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'body'  => 'required',
        ]);
        $inputs = $request->all();

        return view('contact.confirm',['inputs' => $inputs,]);
    }
    // 送信完了
    public function send(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'body'  => 'required'
        ]);
        $action = $request->input('action');
        $inputs = $request->except('action');

        if($action !== 'submit'){
            return redirect()
                ->route('contact')
                ->withInput($inputs);
        }else{
            \Mail::to('s-monma@dip-net.co.jp')->send(new contact($inputs));
            $request->session()->regenerateToken();
            return view('contact.send');
        }
    }
}
