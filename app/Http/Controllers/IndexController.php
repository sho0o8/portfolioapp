<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function top_page(){
        return view ('top_page');
    }
    public function about(){
        return view ('about');
    }
}
