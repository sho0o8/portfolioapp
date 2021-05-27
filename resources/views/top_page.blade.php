@extends('layout.index')

        <!-- Styles -->
@section('stylesheet')
    <link rel="stylesheet" href="{{ asset('css/portfolio.css')}}">
@endsection

@section('title','Meets')

@section('content')
    <div class="top_page_content">
        <h1>新しい仕事探しへ</h1>
        <div class="links">
            <a href="#" class="btn_signup">新規登録はこちら</a>
            <a href="#" class="btn_login">ログインはこちら</a>
        </div>
    </div>
@endsection