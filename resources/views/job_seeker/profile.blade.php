@extends('layout.job')

@section('title','confirm')

@section('content')
<div class="profile_content">
  <div class="profile_title">
    <h1>プロフィール画面</h1>
  </div>
  <div class="profile">
    <table class="personal_profile">
      <tr>
        <th>名前</th>
        <td>○○○○</td>
      </tr>
      <tr>
        <th>フリガナ</th>
        <td>○○○○</td>
      </tr>
      <tr>
        <th>ユーザー名</th>
        <td>○○○○</td>
      </tr>
      <tr>
        <th>電話番号</th>
        <td>○○○○</td>
      </tr>
      <tr>
        <th>E-mail</th>
        <td>○○○○</td>
      </tr>
        <th>年齢</th>
        <td>○○○○</td>
      </tr>
      <tr>
        <th>都道府県</th>
        <td>○○○○</td>
      </tr>
      <tr>
        <th>最寄り駅</th>
        <td>○○○○</td>
      </tr>
      <tr>
        <th>働く勤務時間</th>
        <td>○○○○</td>
      </tr>
      <tr>
        <th>希望時間帯</th>
        <td>○○○○</td>
      </tr>
        <th>服装</th>
        <td>○○○○</td>
      </tr>
      <th>仕事の特徴</th>
        <td>○○○○</td>
      </tr>
    </table>
  </div>
</div>
<div class="profile_links">
  <a href="/mypage/profile/change" class="btn_black">変更する</a>
</div>
  @endsection