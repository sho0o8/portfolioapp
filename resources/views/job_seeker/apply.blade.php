@extends('layout.job')

@section('stylesheet')
  <link rel="stylesheet" href="{{ asset('css/portfolio.css')}}">
@section('title','apply')

@section('content')
<div class="modal_wrap">
  <input id="trigger" type="checkbox">
  <div class="modal_overlay">
    <div class="modal_content">
      <label for="trigger" class="close_button">✖️</label>
      <h2></h2>
      <p>（以下，「当社」といいます。）は，応募者の個人情報を，以下の取扱い方針（以下,「本方針」といいます。）及び個人情報の管理について定める当社「プライバシーポリシー」に基づき，適切に管理・運用致します。当社求人へのご応募にあたっては,本方針及び「プライバシーポリシー」をよくお読みになり,これらへ同意して頂く必要があります。....</p>
    </div>
  </div>
</div>
  <div class="apply_content">
    <div class="apply_form">
      <h1>応募フォーム</h1>
      <form method="post" action="/apply/confirm">
        @csrf
        <label>■名前</label>
        <input type="text" name="name" value="{{old('name')}}">
        <br>
        @if($errors->has('name'))
        <p class="error-message">{{$errors->first('name')}}</p>
        @endif
        <label>■フリガナ</label>
        <input type="text" name="furigana" value="{{old('furigana')}}">
        <br>
        @if($errors->has('furigana'))
        <p class="error-message">{{$errors->first('furugana')}}</p>
        @endif
        <label>■電話番号</label>
        <input type="text" name="tell" value="{{old('tell')}}">
        <br>
        @if($errors->has('tell'))
        <p class="error-message">{{$errors->first('tell')}}</p>
        @endif
        <label>■メールアドレス</label>
        <input type="text" name="email" value="{{old('email')}}">
        <br>
        @if($errors->has('email'))
        <p class="error-message">{{$errors->first('email')}}</p>
        @endif
        <label>■年齢</label>
        <input type="text" name="age" value="{{old('age')}}">
        <br>
        @if($errors->has('age'))
        <p class="error-message">{{$errors->first('age')}}</p>
        @endif
          <label class="btn_terms" for="trigger">■利用規約・個人情報の取り扱いについて</label>
          <input type="checkbox" name="terms">
        <br>
        @if($errors->has('terms'))
        <p class="error-message">{{$errors->first('terms')}}</p>
        @endif
        <br>
        <br>
        <button type="submit">
          入力内容確認
        </button>
      </form>
    </div>
  </div>
@endsection