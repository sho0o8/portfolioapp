@extends('layout.job')

@section('title','confirm')

@section('content')
<div class="confirm_content">
  <div class="contact_form">
    <form method='post' action="/apply/confirm/thanks">
      @csrf
      <div class="apply_confirm_form">
        <p class="apply_confirm_items_label">■氏名</p>
        {{ $inputs['name'] }}
        <input name="name" value="{{ $inputs['name'] }}" type="hidden">
      </div>
      <div class="apply_confirm_form">
        <p class="apply_confirm_items_label">■フリガナ</p>
        {{ $inputs['furigana'] }}
        <input name="furigana" value="{{ $inputs['furigana'] }}" type="hidden">
      </div>
      <div class="apply_confirm_form">
        <p class="apply_confirm_items_label">■生年月日</p>
        {{ $inputs['birthday'] }}
        <input name="birthday" value="{{ $inputs['birthday'] }}" type="hidden">
      </div>
      <div class="apply_confirm_form">
        <p class="apply_confirm_items_label">■現在の職業</p>
        {{ $inputs['job'] }}
        <input name="job" value="{{ $inputs['job'] }}" type="hidden">
      </div>
      <div class="apply_confirm_form">
        <p class="apply_confirm_items_label">■電話番号</p>
        {{ $inputs['tell'] }}
        <input name="tell" value="{{ $inputs['tell'] }}" type="hidden">
      </div>
      <div class="apply_confirm_form">
        <p class="apply_confirm_items_label">■E-mail</p>
        {{ $inputs['mail'] }}
        <input name="mail" value="{{ $inputs['mail'] }}" type="hidden">
      </div>
      <div class="contact_btn">
        <input type="submit"class="btn_submit" value="入力容修正">
        <input type="submit"class="btn_submit" value="応募する">
      </div>
    </form>
  </div>
</div>
@endsection