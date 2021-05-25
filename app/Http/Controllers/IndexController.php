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
    public function contact()
    {
        return view('contact.index');
    }

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
    public function send(Request $request)
    {
    }
    public function job_main(){
        return view('job_seeker.main');
    }
}
