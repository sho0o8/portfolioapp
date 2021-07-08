<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Mail\Applysendmail;
use App\User;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class JobseekerController extends Controller
{
    // 求職者側
    // マイページ
    public function job_main()
    {
        // ログインしていたら、/mypageを表示
        if (Auth::check()) {
        // 求人内容の転機
        $item = DB::table('companies')
        ->join('offers','companies.id','=','offers.company_id')
        ->first();
        return view('job_seeker.main',['item'=>$item]);
        } else {
        // ログインしていなかったら、Login画面を表示
        return view('auth.login');
        }
    }
    // プロフィール画面
    // 現在のプロフィール変更画面
    public function user_edit()
    {
        $item = \App\User::with('user_detail')
        ->where('id',Auth::id())
        ->first();
        return view('job_seeker.profile_confirm',['item'=> $item]);
    }
    // プロフィール確認画面
    public function user_update(Request $request)
    {
        $user_id = Auth::id();
        $user_param = [
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
            'created_at' => now(),
            'updated_at' => now(),
        ];
        DB::table('users')
        ->where('id',$user_id)
        ->update($user_param);
        
        $user_detail_param = [
            'user_id'=> $user_id,
            'last_name' => $request->last_name,
            'first_name' => $request->first_name,
            'last_name_kana' => $request->last_name_kana,
            'first_name_kana' => $request->first_name_kana,
            'birth_date' => $request->birth_date,
            'now_job' => $request->now_job,
            'tel' => $request->tel,
            'prefectures' => $request->prefectures,
            'nearest_station' => $request->nearest_station,
            'desired_working_status' => $request->desired_working_status,
            'desired_work_start_time' => $request->desired_work_start_time,
            'desired_work_end_time' => $request->desired_work_end_time,
            'important_point' => $request->suitable_type,
            'created_at' => now(),
            'updated_at' => now(),
        ];
        DB::table('user_details')
        ->updateOrInsert(['user_id' =>Auth::id()],$user_detail_param);
        return redirect('/mypage');
    }
    // 応募フォーム
    // 入力画面
    public function apply()
    {
        $item = \App\User::with('user_detail')
        ->where('id',Auth::id())
        ->first();
        return view('job_seeker.apply',['item'=> $item]);
    }
    // 確認フォーム
    public function apply_confirm(Request $request)
    {
        $request->validate([
            'last_name' => 'required',
            'first_name' => 'required',
            'last_name_kana' => 'required',
            'first_name_kana' => 'required',
            'birth_date' => 'required',
            'now_job' => 'required',
            'tel' => 'required | numeric | digits_between:8,11',
            'email' => 'required|email',
            'terms' => 'required',
        ]);
        // フォームから受け取った全てのinputの情報を取得
        $inputs = $request->all();
        // 入力内容確認ページに変数inputsを渡して表示
        return view('job_seeker.confirm',['inputs' => $inputs]);
    }
    // 応募完了画面
    public function apply_thanks(Request $request)
    {
        $request->validate([
            'last_name' => 'required',
            'first_name' => 'required',
            'last_name_kana' => 'required',
            'first_name_kana' => 'required',
            'birth_date' => 'required',
            'now_job' => 'required',
            'tel' => 'required | numeric | digits_between:8,11',
            'email' => 'required|email',
        ]);
        //フォームから受け取ったactionの値を取得
        $action = $request->input('action');
         //フォームから受け取ったactionを除いたinputの値を取得
        $inputs = $request->except('action');
        if($action !== 'submit'){
            return redirect()
                ->route('apply');
        } else {
            //入力されたメールアドレスにメールを送信
            \Mail::to($inputs['email'])->send(new Applysendmail($inputs));
            //再送信を防ぐためにトークンを再発行
            $request->session()->regenerateToken();
            //送信完了ページのviewを表示
            return view('job_seeker.thanks');
        }
    }
}
