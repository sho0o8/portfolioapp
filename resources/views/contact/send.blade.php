@extends('layout.index')

@section('title','send')

@section('content')
<div class="send_content">
  <div class="send_title">
    <h1>お問い合わせいただきありがとうございました。</h1>
    <h3>担当より連絡がありますのでお待ちください。</h3>
  </div>
  <form method="post" action="/" >
    @csrf
    <input type="submit" class="btn_submit btn_send" value="TOPページへ戻る" >
  </form>
</div>
  @endsection