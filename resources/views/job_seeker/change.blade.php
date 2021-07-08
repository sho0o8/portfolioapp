@extends('layouts.job')

@section('title','change')

@section('content')
<div class="profile_content">
  <div class="profile_title">
    <h1>プロフィール変更画面</h1>
  </div>
  <form method="post" action="/mypage/profile_confirm/change">
  @csrf
    <div class="profile">
      <table class="profile_info">
        <tr>
          <th class="th_info">■氏名（姓）</th>
          <td class="td_info">
          {{$inputs['last_name'] }}
            <input name="last_name" class="form_items_input" value="{{$inputs['last_name'] }}" type="hidden">
          </td>
        </tr>
        <tr>
          <th class="th_info">■氏名（名）</th>
          <td class="td_info">
          {{ $inputs['first_name'] }}
            <input name="first_name" class="form_items_input" value="{{$inputs['first_name'] }}" type="hidden">
          </td>
        </tr>
        <tr>
          <th class="th_info">■シメイ（セイ）</th>
          <td class="td_info">
          {{ $inputs['last_name_kana'] }}
          <input name="last_name_kana" class="form_items_input" value="{{$inputs['last_name_kana'] }}" type="hidden">
          </td>
        </tr>
        <tr>
          <th class="th_info">■シメイ（メイ）</th>
          <td class="td_info">
          {{ $inputs['first_name_kana'] }}
          <input name="first_name_kana" class="form_items_input" value="{{$inputs['first_name_kana'] }}" type="hidden">
          </td>
        </tr>
        <tr>
          <th class="th_info">■ユーザー名</th>
          <td class="td_info">
          {{ $inputs['name'] }}
          <input name="name" class="form_items_input" value="{{$inputs['name'] }}" type="hidden">
          </td>
        </tr>
        <tr>
          <th class="th_info">■電話番号</th>
          <td class="td_info">
          {{ $inputs['tel'] }}
          <input name="tel" class="form_items_input" value="{{$inputs['tel'] }}" type="hidden">
          </td>
        </tr>
        <tr>
          <th class="th_info">■E-mail</th>
          <td class="td_info">
          {{ $inputs['email'] }}
          <input name="email" class="form_items_input" value="{{$inputs['email'] }}" type="hidden">
          </td>
        </tr>
        <tr>
          <th class="th_info">■PASS</th>
          <td class="td_info">
          {{ $inputs['password'] }}
            <input name="password" class="form_items_input" value="{{$inputs['password'] }}" type="hidden">
          </td>
        </tr>
    </table>
    <table class="job_info">
      <tr>
        <th class="th_info">■生年月日</th>
        <td class="td_info">
          {{ $inputs['birth_date'] }}
        <input name="birth_date" class="form_items_input" value="{{$inputs['birth_date'] }}" type="hidden">
        </td>
      </tr>
      <tr>
        <th class="th_info">■現在の職業</th>
        <td class="td_info">
          {{ $inputs['now_job'] }}
          <input name="now_job" class="form_items_input" value="{{$inputs['now_job'] }}" type="hidden">
        </td>
      </tr>
      <tr>
        <th class="th_info">■都道府県</th>
        <td class="td_info">
          {{ $inputs['prefectures'] }}
          <input name="prefectures" class="form_items_input" value="{{$inputs['prefectures'] }}" type="hidden">
        </td>
      </tr>
      <tr>
        <th class="th_info">■最寄り駅</th>
        <td class="td_info">
          {{ $inputs['nearest_station'] }}
        <input name="nearest_station" class="form_items_input" value="{{$inputs['nearest_station'] }}" type="hidden">
        </td>
      </tr>
      <tr>
          <th class="th_info">■希望雇用形態</th>
          <td class="td_info">
          {{ $inputs['desired_working_status'] }}
          <input name="desired_working_status" class="form_items_input" value="{{$inputs['desired_working_status'] }}" type="hidden">
          </td>
        </tr>
        <tr>
          <th class="th_info">■希望勤務開始時間</th>
          <td class="td_info">
          {{ $inputs['desired_work_start_time'] }}
          <input name="desired_work_start_time" class="form_items_input" value="{{$inputs['desired_work_start_time'] }}" type="hidden">
          </td>
        </tr>
        <tr>
          <th class="th_info">■希望勤務終了時間</th>
          <td class="td_info">
          {{ $inputs['desired_work_end_time'] }}
          <input name="desired_work_end_time" class="form_items_input" value="{{$inputs['desired_work_end_time'] }}" type="hidden">
          </td>
        </tr>
      </table>
    </div>
    <div class="profile_links">
      <input type="button"class="btn_submit" name="back" onclick="history.back()" value="入力内容修正">
      <input type="submit"class="btn_submit" name="change_btn" value="変更">
    </div>
  </form>
</div>
  @endsection