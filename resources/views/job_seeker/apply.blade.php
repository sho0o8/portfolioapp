@extends('layout.job')

@section('title','apply')

@section('content')
  <div class="apply_content">
    <h1>応募フォーム</h1>
    <form method="post" action="/apply/confirm">
    @csrf
      <div class="apply_form">
        <p class="apply_form_items_label"><span class="apply_form_items_required">必須</span>氏名</p>
        <input type="text" class="apply_form_items_input" name="name" placeholder="山田太郎" value="{{old('name')}}">
        <br>
        @if($errors->has('name'))
        <p class="error-message">{{$errors->first('name')}}</p>
        @endif
      </div>
      <div class="apply_form">
        <p class="apply_form_items_label"><span class="apply_form_items_required">必須</span>フリガナ</p>
        <input type="text" class="apply_form_items_input" name="furigana" placeholder="ヤマダタロウ" value="{{old('furigana')}}">
        <br>
        @if($errors->has('furigana'))
        <p class="error-message">{{$errors->first('furigana')}}</p>
        @endif
      </div>
      <div class="apply_form">
        <p class="apply_form_items_label"><span class="apply_form_items_required">必須</span>生年月日</p>
        <input type="date" class="apply_form_items_input" name="birthday" value="{{old('birthday')}}">
        <br>
        @if($errors->has('birthday'))
        <p class="error-message">{{$errors->first('birthday')}}</p>
        @endif
      </div>
      <div class="apply_form">
        <p class="apply_form_items_label"><span class="apply_form_items_required">必須</span>現在の職業</p>
        <input type="text" class="apply_form_items_input" name="job" value="{{old('job')}}">
        <br>
        @if($errors->has('job'))
        <p class="error-message">{{$errors->first('job')}}</p>
        @endif
      </div>
      <div class="apply_form">
        <p class="apply_form_items_label"><span class="apply_form_items_required">必須</span>電話番号</p>
        <input type="tel" class="apply_form_items_input" name="tell" placeholder="(半角ハイフンを除く)" value="{{old('tell')}}">
        <br>
        @if($errors->has('tell'))
        <p class="error-message">{{$errors->first('tell')}}</p>
        @endif
      </div>
      <div class="apply_form">
        <p class="apply_form_items_label"><span class="apply_form_items_required">必須</span>メールアドレス</p>
        <input type="email" class="apply_form_items_input" name="mail" placeholder="example@gmail.com" value="{{old('mail')}}">
        <br>
        @if($errors->has('mail'))
        <p class="error-message">{{$errors->first('mail')}}</p>
        @endif
      </div>
  <!-- 利用規約 -->
      <div class="apply_form_terms">
        <a href="#login_terms">利用規約・個人情報の取り扱いについて</a>
        <input type="checkbox" name="terms">
        <!-- ポップアップ -->
        <div class="modal_wrapper" id="login_terms">
          <a href="#!" class="modal_overlay"></a>
          <div class="modal_window">
            <div class="terms_content">
              <h4>■利用規約・個人情報の取り扱いについて</h4>
              <p>（以下，「当社」といいます。）は，応募者の個人情報を，以下の取扱い方針（以下,「本方針」といいます。）及び個人情報の管理について定める当社「プライバシーポリシー」に基づき，適切に管理・運用致します。当社求人へのご応募にあたっては,本方針及び「プライバシーポリシー」をよくお読みになり,これらへ同意して頂く必要があります。....</p>
            </div>
            <a href="#" class="modal_close">✖️</a>
          </div>
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
@endsection