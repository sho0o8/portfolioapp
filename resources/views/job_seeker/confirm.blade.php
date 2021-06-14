@extends('layout.job')

@section('title','confirm')

@section('content')
  <div class="confirm_content">
    <form method='post' action="/apply/confirm/thanks">
      @csrf
      <div class="apply_form">
        <p class="apply_form_items_label">■氏名</p>
        {{ $inputs['name'] }}
        <input name="name" value="{{ $inputs['name'] }}" type="hidden">
      </div>
      <div class="apply_form">
        <p class="apply_form_items_label">■フリガナ</p>
        {{ $inputs['furigana'] }}
        <input name="furigana" value="{{ $inputs['furigana'] }}" type="hidden">
      </div>
      <div class="apply_form">
        <p class="apply_form_items_label">■生年月日</p>
        {{ $inputs['birthday'] }}
        <input name="birthday" value="{{ $inputs['birthday'] }}" type="hidden">
      </div>
      <div class="apply_form">
        <p class="apply_form_items_label">■現在の職業</p>
        {{ $inputs['now_job'] }}
        <input name="now_job" value="{{ $inputs['now_job'] }}" type="hidden">
      </div>
      <div class="apply_form">
        <p class="apply_form_items_label">■電話番号</p>
        {{ $inputs['tell'] }}
        <input name="tell" value="{{ $inputs['tell'] }}" type="hidden">
      </div>
      <div class="apply_form">
        <p class="apply_form_items_label">■E-mail</p>
        {{ $inputs['mail'] }}
        <input name="mail" value="{{ $inputs['mail'] }}" type="hidden">
      </div>
      <div class="contact_btn">
        <input onclick="history.back()"class="btn_submit" value="入力内容修正">
        <input type="submit"class="btn_submit" value="応募する">
      </div>
    </form>
  </div>
@endsection