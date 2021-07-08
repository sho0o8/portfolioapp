@extends('layouts.index')

@section('content')
  <div class="contact_content">
    <h1>お問い合わせフォーム</h1>
    <form method="post" action="/contact/confirm">
      @csrf
      <div class="contact_form">
        <p class="form_items_label"><span class="form_items_required">必須</span>氏名</p>
        <input type="text" class="form_items_input" name="name" placeholder="山田太郎" value="{{old('name')}}">
        <br>
        @if($errors->has('name'))
        <p class="error-message">{{$errors->first('name')}}</p>
        @endif
      </div>
      <div class="contact_form">
        <p class="form_items_label"><span class="form_items_required">必須</span>メールアドレス</p>
        <input type="email" class="form_items_input" name="email" placeholder="example@gmail.com" value="{{old('email')}}">
        <br>
        @if($errors->has('email'))
        <p class="error-message">{{$errors->first('email')}}</p>
        @endif
      </div>
      <div class="contact_form">
        <p class="form_items_label ismsg"><span class="form_items_required">必須</span>お問い合わせ内容</p>
        <textarea name="body" class="form_items_textarea">
          {{old('body')}}
        </textarea>
        <br>
        @if($errors->has('body'))
        <p class="error-message">{{$errors->first('body')}}</p>
        @endif
      </div>
      <div class="contact_btn">
        <button type="submit" name="action" class="btn_submit btn_contact" value="sent">入力内容確認</button>
      </div>
    </form>
  </div>
@endsection