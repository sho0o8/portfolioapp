<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CompanyController extends Controller
{
    // 企業側
    // ログイン＆新規ページ
    public function company_login(){
        return view('company.login');
    }
    public function company_condition(){
        return view('company.condition');
    }
    // マイページ
    public function company_mypage(){
        return view('company.mypage');
    }
    // 求人変更ページ
    public function company_change(){
        return view('company.change');
    }
}
