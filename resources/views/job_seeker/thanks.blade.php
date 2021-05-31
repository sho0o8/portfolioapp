@extends('layout.job')

@section('title','thanks')

@section('content')
<div class="thanks_content">
  <div class="thanks_title">
    <h1>ご応募いただきありがとうございました。</h1>
    <h3>応募先より連絡がありますのでお待ちください。</h3>
  </div>
  <form method="post" action="/mypage" >
    <button type="submit" >TOPページへ戻る</button>
  </form>
</div>
  @endsection