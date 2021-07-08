@extends('layouts.job')

@section('title','apply')

@section('content')
  <div class="apply_content">
    <h1>応募フォーム</h1>
    <form method="post" action="/apply/confirm">
    @csrf
      <div class="apply_form">
        <p class="apply_form_items_label"><span class="apply_form_items_required">必須</span>氏名（姓）</p>
        <input type="text" class="apply_form_items_input" name="last_name" placeholder="山田" value="{{$item ->user_detail -> last_name}}">
        <br>
        <!-- エラーメッセージ出力 -->
        @if($errors->has('last_name'))
        <p class="error-message">{{$errors->first('last_name')}}</p>
        @endif
      </div>
      <div class="apply_form">
        <p class="apply_form_items_label"><span class="apply_form_items_required">必須</span>氏名（名）</p>
        <input type="text" class="apply_form_items_input" name="first_name" placeholder="太郎" value="{{$item ->user_detail -> first_name}}">
        <br>
        <!-- エラーメッセージ出力 -->
        @if($errors->has('first_name'))
        <p class="error-message">{{$errors->first('first_name')}}</p>
        @endif
      </div>
      <div class="apply_form">
        <p class="apply_form_items_label"><span class="apply_form_items_required">必須</span>シメイ（セイ）</p>
        <input type="text" class="apply_form_items_input" name="last_name_kana" placeholder="ヤマダ" value="{{$item->user_detail -> last_name_kana}}">
        <br>
        @if($errors->has('last_name_kana'))
        <p class="error-message">{{$errors->first('last_name_kana')}}</p>
        @endif
      </div>
      <div class="apply_form">
        <p class="apply_form_items_label"><span class="apply_form_items_required">必須</span>シメイ（メイ）</p>
        <input type="text" class="apply_form_items_input" name="first_name_kana" placeholder="タロウ" value="{{$item ->user_detail -> first_name_kana}}">
        <br>
        @if($errors->has('first_name_kana'))
        <p class="error-message">{{$errors->first('first_name_kana')}}</p>
        @endif
      </div>
      <div class="apply_form">
        <p class="apply_form_items_label"><span class="apply_form_items_required">必須</span>生年月日</p>
        <input type="date" class="apply_form_items_input" name="birth_date" value="{{$item ->user_detail -> birth_date}}">
        <br>
        @if($errors->has('birth_date'))
        <p class="error-message">{{$errors->first('birth_date')}}</p>
        @endif
      </div>
      <div class="apply_form">
        <p class="apply_form_items_label"><span class="apply_form_items_required">必須</span>現在の職業</p>
        <select class="apply_form_items_input" name="now_job">
          @foreach (config('const.now_job') as $key => $value)
          <option value="{{ $key }}">{{ $value }}</option>
          @endforeach
        </select>
        <br>
        @if($errors->has('now_job'))
        <p class="error-message">{{$errors->first('now_job')}}</p>
        @endif
      </div>
      <div class="apply_form">
        <p class="apply_form_items_label"><span class="apply_form_items_required">必須</span>電話番号</p>
        <input type="tel" class="apply_form_items_input" name="tel" placeholder="(半角ハイフンを除く)" value="{{$item ->user_detail -> tel}}">
        <br>
        @if($errors->has('tel'))
        <p class="error-message">{{$errors->first('tel')}}</p>
        @endif
      </div>
      <div class="apply_form">
        <p class="apply_form_items_label"><span class="apply_form_items_required">必須</span>メールアドレス</p>
        <input type="email" class="apply_form_items_input" name="email" placeholder="example@gmail.com" value="{{$item -> email}}">
        <br>
        @if($errors->has('email'))
        <p class="error-message">{{$errors->first('email')}}</p>
        @endif
      </div>
  <!-- 利用規約 -->
      <div class="apply_form_terms">
        <a href="#" class="login_terms">利用規約・個人情報の取り扱いについて
          <input type="checkbox" name="terms">
        <!-- ポップアップ -->
        <div class="popup">
          <div class="modal_window">
            <div class="terms_content">
              <h4>■利用規約・個人情報の取り扱いについて</h4>
              <p>（以下，「当社」といいます。）は，応募者の個人情報を，以下の取扱い方針（以下,「本方針」といいます。）及び個人情報の管理について定める当社「プライバシーポリシー」に基づき，適切に管理・運用致します。当社求人へのご応募にあたっては,本方針及び「プライバシーポリシー」をよくお読みになり,これらへ同意して頂く必要があります。....</p>
            </div>
            <a href="#" class="modal_close">✖️</a>
          </div>
        </div>
        @if($errors->has('terms'))
        <p class="error-message">{{$errors->first('terms')}}</p>
        @endif
        <br>
        <div class="apply_form_btn">
          <input type="submit" class="btn_submit btn_send" value="入力内容確認">
        </div>
      </form>
    </div>
  </div>
  <!-- jquery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>
$('.login_terms').on('click',function(){
    $('.popup').addClass('show').fadeIn();
});
$('.modal_close').on('click',function(){
    $('.popup').fadeOut();
});
</script>
@endsection