@extends('layout.index')

        <!-- Styles -->
@section('stylesheet')
    <link rel="stylesheet" href="{{ asset('css/top_page.css')}}">
@endsection

@section('title','Meets')

@section('content')
    <div class="content">
        <h1>新しい仕事探しへ</h1>
        <div class="links">
            <a href="#" class="btn signup">新規登録はこちら</a>
            <a href="#" class="btn login">ログインはこちら</a>
        </div>
    </div>
@endsection