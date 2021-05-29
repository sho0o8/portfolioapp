@extends('layout.job')

<!-- Styles -->
@section('stylesheet')
  <link rel="stylesheet" href="{{ asset('css/portfolio.css')}}">
@endsection

@section('title','logout')

@section('content')
<div class="logout_content">
  <div class="logout_title">
    <h1>ログアウト</h1>
  </div>
  <form method="post" action="/" >
    <button type="submit" >TOPページへ戻る</button>
  </form>
</div>
  @endsection