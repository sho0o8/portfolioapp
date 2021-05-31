@extends('layout.index')

@section('title','send')

@section('content')
<div class="send_content">
  <div class="send_title">
    <h1>お問い合わせいただきありがとうございました。</h1>
    <h3>担当より連絡がありますのでお待ちください。</h3>
  </div>
  <form method="post" action="/" >
    <button type="submit" >TOPページへ戻る</button>
  </form>
</div>
  @endsection