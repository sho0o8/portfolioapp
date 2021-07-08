<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class ToppageController extends Controller
{
    // トップページ
    public function top_page(Request $request)
    // トップページの反映
    {
        return view ('top_page');
    }
    // サービスについて
    public function about(){
        return view ('about');
    }
}
