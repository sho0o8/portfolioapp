<?php

namespace App\Http\Controllers;
use App\Company;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class CompanyController extends Controller
{
    // ログインユーザー取得
    public function __construct()
    {
        $this->middleware('auth:company');
    }
    // 企業側
    // ログイン＆新規作成ページ
    public function company_login_add()
    {
        // ログインページの反映
        return view('company.login');
    }
    public function company_login_create(Request $request)
    {
        return view('company.mypage');
    }
    // 企業管理画面
    public function company_mypage()
    {
        return view('company.mypage');
    }
    // 新規作成ページ
    public function offer_add()
    {
        // 新規作成ページ反映
        return view('company.condition');
    }
    public function offer_create(Request $request)
    {
        $company_id = Auth::id();
        // 求人情報の追加メソッド
        $offer_param =[
            'company_id'=> $company_id,
            'job_type'=>$request->job_type,
            'working_status'=>$request->working_status,
            'salary_form'=>$request->salary_form,
            'salary'=>$request->salary,
            'work_start_time'=>$request->work_start_time,
            'work_end_time'=>$request->work_end_time,
            'title'=>$request->title,
            'offer'=>$request->offer,
            'treatment'=>$request->treatment,
            'clothes'=>$request->clothes,
            'suitable_type'=>$request->suitable_type,
            'other'=>$request->other,
            'created_at'=>now(),
            'updated_at'=>now(),
        ];
        DB::table('offers')
        ->Insert($offer_param);
        return redirect('/company/company_mypage');
    }
    // 求人変更ページ
    public function change_add(){
        $item = \App\Company::with('offer')
        ->where('id', Auth::id())
        ->first();
        return view('company.change',['item' => $item]);
    }
    public function change_update(Request $request)
    {
        $company_id = Auth::id();
        $company_param = [
            'name' => $request->name,
            'prefectures' => $request->prefectures,
            'address' => $request->address,
            'nearest_station' => $request->nearest_station,
            'tel' => $request->tel,
            'email' => $request->email,
            'password' => $request->password,
            'created_at' => now(),
            'updated_at' => now(),
        ];
        DB::table('companies')
        ->where('id',$company_id)
        ->update($company_param);

        $offer_param =[
            'company_id'=> $company_id,
            'job_type'=>$request->job_type,
            'working_status'=>$request->working_status,
            'salary_form'=>$request->salary_form,
            'salary'=>$request->salary,
            'work_start_time'=>$request->work_start_time,
            'work_end_time'=>$request->work_end_time,
            'title'=>$request->title,
            'offer'=>$request->offer,
            'treatment'=>$request->treatment,
            'clothes'=>$request->clothes,
            'suitable_type'=>$request->suitable_type,
            'other'=>$request->other,
            'created_at'=>now(),
            'updated_at'=>now(),
        ];
        DB::table('offers')
        ->where('company_id',$company_id)
        ->update($offer_param);
        return redirect('/company/company_mypage');
    }
}
