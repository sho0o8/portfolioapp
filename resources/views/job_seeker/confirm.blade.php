@extends('layout.job')

@section('stylesheet')
  <link rel="stylesheet" href="{{ asset('css/portfolio.css')}}">
@endsection

@section('title','confirm')

@section('content')
<div class="confirm_content">
  <div class="contact_form">
    <form method='post' action="/apply/confirm/thanks">
      @csrf
      <label>■名前</label>
      {{ $inputs['name'] }}
      <input name="name" value="{{ $inputs['name'] }}" type="hidden">
      <br>
      <label>■フリガナ</label>
      {{ $inputs['furigana'] }}
      <input name="furigana" value="{{ $inputs['furigana'] }}" type="hidden">
      <br>
      <label>■電話番号</label>
      {{ $inputs['tell'] }}
      <input name="tell" value="{{ $inputs['tell'] }}" type="hidden">
      <br>
      <label>■メールアドレス</label>
      {{ $inputs['email'] }}
      <input name="email" value="{{ $inputs['email'] }}" type="hidden">
      <br>
      <label>■年齢</label>
      {{ $inputs['age'] }}
      <input name="age" value="{{ $inputs['age'] }}" type="hidden">
      <br>
      <br>
      <button type="submit" value="back">入力内容修正</button>
      <button type="submit" value="submit">応募する</button>
    </form>
  </div>
  </div>
@endsection