@extends('layouts.index')

@section('title','confirm')

@section('content')
<div class="confirm_content">
  <div class="contact_form">
    <p class="form_items_label">氏名</p>
    {{ $inputs['name'] }}
  </div>
  <div class="contact_form">
    <p class="form_items_label">メールアドレス</p>
    {{$inputs['email'] }}
  </div>
  <div class="contact_form">
    <p class="form_items_label ismsg">お問い合わせ内容</p>
    {!! nl2br(e($inputs['body'])) !!}
  </div>
  <form method='post' action="/contact/send">
  @csrf
    <input name="name" class="form_items_input" value="{{ $inputs['name'] }}" type="hidden">
    <input name="email" class="form_items_input" value="{{ $inputs['email'] }}" type="hidden">
    <input name="body" class="form_items_textarea" value="{{ $inputs['body'] }}" type="hidden">
    <div class="contact_btn">
      <button type="submit" name="action" class="btn_submit" value="back">戻る</button>
      <button type="submit" name="action" class="btn_submit" value="submit">送信</button>
    </div>
  </form>
</div>
@endsection