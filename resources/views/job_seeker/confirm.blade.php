@extends('layouts.job')

@section('title','confirm')

@section('content')
  <div class="confirm_content">
    <form method='post' action="/apply/thanks">
      @csrf
      <div class="apply_form">
        <p class="apply_form_items_label">氏名（姓）</p>
        {{ $inputs['last_name'] }}
        <input name="last_name" value="{{ $inputs['last_name'] }}" type="hidden">
      </div>
      <div class="apply_form">
        <p class="apply_form_items_label">氏名（名）</p>
        {{ $inputs['first_name'] }}
        <input name="first_name" value="{{ $inputs['first_name'] }}" type="hidden">
      </div>
      <div class="apply_form">
        <p class="apply_form_items_label">シメイ（セイ）</p>
        {{ $inputs['last_name_kana'] }}
        <input name="last_name_kana" value="{{ $inputs['last_name_kana'] }}" type="hidden">
      </div>
      <div class="apply_form">
        <p class="apply_form_items_label">シメイ（メイ）</p>
        {{ $inputs['first_name_kana'] }}
        <input name="first_name_kana" value="{{ $inputs['first_name_kana'] }}" type="hidden">
      </div>
      <div class="apply_form">
        <p class="apply_form_items_label">生年月日</p>
        {{ $inputs['birth_date'] }}
        <input name="birth_date" value="{{ $inputs['birth_date'] }}" type="hidden">
      </div>
      <div class="apply_form">
        <p class="apply_form_items_label">現在の職業</p>
        {{config('const.now_job.'.$inputs['now_job'])}}
        <input name="now_job" value="{{ $inputs['now_job'] }}" type="hidden">
      </div>
      <div class="apply_form">
        <p class="apply_form_items_label">電話番号</p>
        {{ $inputs['tel'] }}
        <input name="tel" value="{{ $inputs['tel'] }}" type="hidden">
      </div>
      <div class="apply_form">
        <p class="apply_form_items_label">E-mail</p>
        {{ $inputs['email'] }}
        <input name="email" value="{{ $inputs['email'] }}" type="hidden">
      </div>
      <div class="contact_btn">
        <button type="submit" name="action" class="btn_submit" value="back">入力内容修正</button>
        <button type="submit" name="action" class="btn_submit" value="submit">応募する</button>
      </div>
    </form>
  </div>
@endsection