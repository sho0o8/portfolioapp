@extends('layout.index')

@section('title','confirm')

@section('content')
<div class="confirm_content">
  <form method='post' action="/contact/confirm/send">
  @csrf
    <div class="contact_form">
      <p class="form_items_label">■氏名</p>
      {{ $inputs['name'] }}
      <input name="name" class="form_items_input" value="{{$inputs['name'] }}"type="hidden">
    </div>
    <div class="contact_form">
      <p class="form_items_label">■メールアドレス</p>
      {{ $inputs['email'] }}
      <input name="email" class="form_items_input" value="{{$inputs['email'] }}"type="hidden">
    </div>
    <div class="contact_form">
      <p class="form_items_label ismsg">■お問い合わせ内容</p>
      {{$inputs['body']}}
      <input name="body" class="form_items_textarea" value="{{$inputs['body'] }}"type="hidden">
    </div>
    <div class="contact_btn">
      <input class="btn_submit" onclick="history.back()" value="入力内容修正">
      <input type="submit"class="btn_submit" value="送信">
    </div>
  </form>
</div>
@endsection