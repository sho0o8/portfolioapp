@extends('layout.index')

@section('stylesheet')
  <link rel="stylesheet" href="{{ asset('css/contact.css')}}">
@section('title','Contact')

@section('content')
  <div class="contact_form">
    <h1>お問い合わせフォーム</h1>
    <form method="post" action="contact/confirm">
      @csrf
      <label>■名前</label>
      <input type="text" name="name" value="{{old('name')}}">
      <br>
      @if($errors->has('name'))
      <p class="error-message">{{$errors->first('name')}}</p>
      @endif
      <label>■メールアドレス</label>
      <input type="text" name="email" value="{{old('email')}}">
      <br>
      @if($errors->has('email'))
      <p class="error-message">{{$errors->first('emial')}}</p>
      @endif
      <label>■お問い合わせ内容</label>
      <textarea name="body">
        {{old('body')}}
      </textarea>
      <br>
      @if($errors->has('body'))
      <p class="error-message">{{$errors->first('body')}}</p>
      @endif
      <button type="submit">
        入力内容確認
      </button>
    </form>
  </div>
@endsection