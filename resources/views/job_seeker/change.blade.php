@extends('layout.job')

@section('title','change')

@section('content')
<div class="profile_content">
  <div class="profile_title">
    <h1>プロフィール変更画面</h1>
  </div>
  <form method="post" action="/mypage">
  @csrf
    <div class="profile">
      <table class="profile_info">
        <tr>
          <th class="th_info">■氏名</th>
          <td class="td_info">
            {{ $inputs['name'] }}
            <input name="name" class="form_items_input" value="{{$inputs['name'] }}"type="hidden">
          </td>
        </tr>
        <tr>
          <th class="th_info">■フリガナ</th>
          <td class="td_info">
          {{ $inputs['furigana'] }}
          <input name="furigana" class="form_items_input" value="{{$inputs['furigana'] }}"type="hidden">
          </td>
        </tr>
        <tr>
          <th class="th_info">■ユーザー名</th>
          <td class="td_info">
          {{ $inputs['user'] }}
          <input name="user" class="form_items_input" value="{{$inputs['user'] }}"type="hidden">
          </td>
        </tr>
        <tr>
          <th class="th_info">■電話番号</th>
          <td class="td_info">
          {{ $inputs['tel'] }}
          <input name="tel" class="form_items_input" value="{{$inputs['tel'] }}"type="hidden">
          </td>
        </tr>
        <tr>
          <th class="th_info">■E-mail</th>
          <td class="td_info">
          {{ $inputs['mail'] }}
          <input name="mail" class="form_items_input" value="{{$inputs['mail'] }}"type="hidden">
          </td>
        </tr>
        <tr>
          <th class="th_info">■都道府県</th>
          <td class="td_info">
          <input name="prefectures" class="form_items_input" value="{{$inputs['prefectures'] }}"type="hidden">
          </td>
        </tr>
        <tr>
          <th class="th_info">■最寄り駅</th>
          <td class="td_info">
          {{ $inputs['closest_station'] }}
          <input name="closest_station" class="form_items_input" value="{{$inputs['closest_station'] }}"type="hidden">
          </td>
        </tr>
        <tr>
          <th class="th_info">■PASS</th>
          <td class="td_info">
          {{ $inputs['pass'] }}
          <input name="pass" class="form_items_input" value="{{$inputs['pass'] }}"type="hidden">
          </td>
        </tr>
      </table>
      <table class="job_info">
        <tr>
          <th class="th_info">■希望雇用形態</th>
          <td class="td_info">
          {{ $inputs['status'] }}
          <input name="status" class="form_items_input" value="{{$inputs['status'] }}"type="hidden">
          </td>
        </tr>
        <tr>
          <th class="th_info">■希望給与</th>
          <td class="td_info">
          {{ $inputs['salary_system'] }}
          {{ $inputs['salary'] }}
          <input name="salary" class="form_items_input" value="{{$inputs['salary'] }}"type="hidden">
          </td>
        </tr>
        <tr>
          <th class="th_info">■希望勤務時間</th>
          <td class="td_info">
          {{ $inputs['working_times'] }}
          <input name="working_times" class="form_items_input" value="{{$inputs['working_times'] }}"type="hidden">
          </td>
        </tr>
      </table>
    </div>
    <div class="profile_links">
      <input type="submit"class="btn_submit" value="入力内容修正">
      <input type="submit"class="btn_submit" value="完了">
    </div>
  </form>
</div>
  @endsection