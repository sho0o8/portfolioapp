@extends('layout.index')

@section('stylesheet')
  <link rel="stylesheet" href="{{ asset('css/portfolio.css')}}">
@endsection

@section('title','confirm')

@section('content')
  <div class="confirm_content">
    <div class="contact_form">
      <form method='post' action="contact/send">
        @csrf
        <label>■名前</label>
        {{ $inputs['name'] }}
        <input name="name" value="{{ $inputs['name'] }}" type="hidden">
        <br>
        <label>■メールアドレス</label>
        {{ $inputs['email'] }}
        <input name="email" value="{{ $inputs['email'] }}" type="hidden">
        <br>
        <label>■お問い合わせ内容</label>
        {{$inputs['body']}}
        <input name="body" value="{{ $inputs['body'] }}" type="hidden">
        <br>
        <button type="submit" name="action" value="back">入力内容修正</button>
        <button type="submit" name="action" value="submit">送信する</button>
      </form>
    </div>
  </div>
@endsection