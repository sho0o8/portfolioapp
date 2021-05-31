@extends('layout.job')

@section('title','change')

@section('content')
<div class="profile_change">
  <div class="change_title">
    <h1>プロフィール変更画面</h1>
  </div>
  <div class="change">
    <form method="post" action="">
      <table class="personal_change">
        <tr>
          <th>名前</th>
          <td><input type="text" name="name" value="{{old('name')}}"></td>
        </tr>
        <tr>
          <th>フリガナ</th>
          <td><input type="text" name="furigana" value="{{old('furigana')}}"></td>
        </tr>
        <tr>
          <th>ユーザー名</th>
          <td><input type="text" name="user" value="{{old('user')}}"></td>
        </tr>
        <tr>
          <th>電話番号</th>
          <td><input type="text" name="tell" value="{{old('tell')}}"></td>
        </tr>
        <tr>
          <th>E-mail</th>
          <td><input type="text" name="mail" value="{{old('mail')}}"></td>
        </tr>
        <tr>
          <th>年齢</th>
          <td><input type="text" name="age" value="{{old('age')}}"></td>
        </tr>
        <tr>
          <th>都道府県</th>
          <td><input type="text" name="prefectures" value="{{old('prefectures')}}"></td>
        </tr>
        <tr>
          <th>最寄り駅</th>
          <td><input type="text" name="prefectures" value="{{old('prefectures')}}"></td>
        </tr>
        <tr>
          <th>都道府県</th>
          <td><input type="text" name="closest_station" value="{{old('closest_station')}}"></td>
        </tr>
        <tr>
          <th>希望勤務時間</th>
          <td><input type="text" name="working_times" value="{{old('working_times')}}"></td>
        </tr>
        <tr>
          <th>希望時間帯</th>
          <td><input type="text" name="time_period" value="{{old('time_period')}}"></td>
        </tr>
        <tr>
          <th>服装</th>
          <td><input type="text" name="clothes" value="{{old('clothes')}}"></td>
        </tr>
        <tr>
          <th>仕事の特徴</th>
          <td><input type="text" name="feature" value="{{old('feature')}}"></td>
        </tr>
      </table>
      <input type="submit" value="完了">
    </form>
  </div>
</div>
  @endsection