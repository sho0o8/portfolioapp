@extends('layout.job')

@section('title','logout')

@section('content')
<div class="logout_content">
  <div class="logout_title">
    <h1>ログアウト</h1>
  </div>
  <form method="post" action="/" >
  @csrf
    <input type="submit" class="btn_submit" value="TOPページ" >
  </form>
</div>
  @endsection