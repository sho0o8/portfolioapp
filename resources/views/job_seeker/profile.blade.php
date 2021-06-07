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
        <th class="th_info">■氏名</th>
        <td class="td_info"><input type="text" name="name" value="{{old('job')}}"></td>
      </tr>
      <tr>
        <th class="th_info">■フリガナ</th>
        <td class="td_info"><input type="text" name="furigana" value="{{old('furigana')}}"></td>
      </tr>
      <tr>
        <th class="th_info">■ユーザー名</th>
        <td class="td_info"><input type="text" name="user" value="{{old('user')}}"></td>
      </tr>
      <tr>
        <th class="th_info">■電話番号</th>
        <td class="td_info"><input type="tel" name="tell" value="{{old('tell')}}"></td>
      </tr>
      <tr>
        <th class="th_info">■E-mail</th>
        <td class="td_info"><input type="email" name="mail" value="{{old('mail')}}"></td>
      </tr>
      <tr>
        <th class="th_info">■都道府県</th>
        <td class="td_info"><input type="text" name="prefectures" value="{{old('prefectures')}}"></td>
      </tr>
      <tr>
        <th class="th_info">■最寄り駅</th>
        <td class="td_info"><input type="closest_station" name="mail" value="{{old('closest_station')}}"></td>
      </tr>
      <tr>
        <th class="th_info">■PASS</th>
        <td class="td_info"><input type="password" name="pass" value="{{old('pass')}}"></td>
      </tr>
      <tr>
        <th class="th_info">■PASS(確認)</th>
        <td class="td_info"><input type="password" name="pass" value="{{old('pass')}}"></td>
      </tr>
    </table>
    <table class="job_profile">
      <tr>
        <th class="th_info">■希望雇用形態</th>
        <td class="td_info">
          <select name="status" value="{{old('status')}}">
            <option value="" selected="selected">選択してください</option>
            <option value="アルバイト">アルバイト</option>
            <option value="正社員">正社員</option>
            <option value="契約社員">契約社員</option>
            <option value="派遣">派遣</option>
            <option value="業務委託">業務委託</option>
          </select>
        </td>
      </tr>
      <tr>
        <th class="th_info">■希望給与</th>
        <td class="td_info">
          <select name="salary_system" value="{{old('salary_system')}}">
            <option value="" selected="selected">選択してください</option>
            <option value="時給">時給</option>
            <option value="日給">日給</option>
            <option value="月給">月給</option>
            <option value="年俸">年俸</option>
            <option value="完全出来高">完全出来高</option>
          </select>
          <input type="text" name="salary" value="{{old('salary')}}">
        </td>
      </tr>
      <tr>
        <th class="th_info">■希望勤務時間</th>
        <td class="td_info"><input type="text" name="working_times" value="{{old('working_times')}}"></td>
      </tr>
      <tr>
        <th class="th_info">■この仕事向いている人</th>
        <td class="td_info">
          <input type="checkbox" name="feature">実力主義<br>
          <input type="checkbox" name="feature">お金を稼ぎたい<br>
          <input type="checkbox" name="feature">スキル・経験を活かしたい<br>
          <input type="checkbox" name="feature">淡々と仕事がしたい<br>
          <input type="checkbox" name="feature">工夫を試しながら仕事がしたい<br>
          <input type="checkbox" name="feature">チームで仕事をしたい<br>
          <input type="checkbox" name="feature">個人で仕事をしたい<br>
          <input type="checkbox" name="feature">挑戦・成長意欲が高い<br>
          <input type="checkbox" name="feature">安定的に仕事がしたい<br>
          <input type="checkbox" name="feature">好奇心・探究心が高い<br>
          <input type="checkbox" name="feature">コミュニケーションを取ることが好き<br>
          <input type="checkbox" name="feature">考えることが好き<br>
          <input type="checkbox" name="feature">人に寄り添いたい<br>
          <input type="checkbox" name="feature">プライベートも大切にしたい<br>
          <input type="checkbox" name="feature">オンオフのメリハリを大切にしたい<br>
          <input type="checkbox" name="feature">ものづくりが好き<br>
        </td>
      </tr>
    </table>
  </div>
</div>
<div class="profile_links">
  <form ,method="post" action="/mypage/profile/change">
  <input type="submit" class="btn_submit">
</form>
</div>
  @endsection