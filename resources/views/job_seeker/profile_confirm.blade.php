@extends('layouts.job')

@section('title','confirm')

@section('content')
<div class="profile_content">
  <div class="profile_title">
    <h1>プロフィール確認画面</h1>
  </div>
  <form method="post" action="/mypage/profile_confirm">
  @csrf
    <div class="profile">
      <table class="profile_info">
          <th class="th_info">氏名（姓）</th>
          <td class="td_info">
            <input type="text" name="last_name" value="{{$item ->user_detail -> last_name}}"></td>
        </tr>
        <tr>
          <th class="th_info">氏名（名）</th>
          <td class="td_info"><input type="text" name="first_name" value="{{$item ->user_detail -> first_name}}"></td>
        </tr>
        <tr>
          <th class="th_info">シメイ（セイ）</th>
          <td class="td_info"><input type="text" name="last_name_kana" value="{{$item->user_detail -> last_name_kana}}"></td>
        </tr>
        <tr>
          <th class="th_info">シメイ（メイ）</th>
          <td class="td_info"><input type="text" name="first_name_kana" value="{{$item ->user_detail -> first_name_kana}}"></td>
        </tr>
        <tr>
          <th class="th_info">ユーザー名</th>
          <td class="td_info"><input type="text" name="name" value="{{$item -> name}}"></td>
        </tr>
        <tr>
          <th class="th_info">電話番号</th>
          <td class="td_info"><input type="tel" name="tel" value="{{$item ->user_detail -> tel}}"></td>
        </tr>
        <tr>
          <th class="th_info">E-mail</th>
          <td class="td_info"><input type="email" name="email" value="{{$item -> email}}"></td>
        </tr>
        <tr>
          <th class="th_info">PASS</th>
          <td class="td_info"><input type="password" name="password" value="{{$item -> password}}"></td>
        </tr>
      </table>
      <table class="job_info">
        <tr>
          <th class="th_info">生年月日</th>
          <td class="td_info"><input type="date" name="birth_date" value="{{$item ->user_detail -> birth_date}}"></td>
        </tr>
        <tr>
          <th class="th_info">現在の職業</th>
          <td class="td_info">
            <select name="now_job">
              @foreach (config('const.job_type') as $key => $value)
              <option value="{{ $key }}">{{ $value }}</option>
              @endforeach
            </select>
          </td>
        </tr>
          <th class="th_info">都道府県</th>
          <td class="td_info">
            <select name="prefectures">
              @foreach (config('const.preflist') as $key => $value)
                  <option value="{{ $key }}">{{ $value }}</option>
              @endforeach
            </select>
          </td>
        </tr>
        <tr>
          <th class="th_info">最寄り駅</th>
          <td class="td_info"><input type="text" name="nearest_station" value="{{$item ->user_detail -> nearest_station}}"></td>
        </tr>
        <tr>
          <th class="th_info">希望雇用形態</th>
          <td class="td_info">
            <select name="desired_working_status" value="{{$item ->user_detail -> desired_working_status}}">
              @foreach (config('const.working_status') as $key => $value)
              <option value="{{ $key }}">{{ $value }}</option>
              @endforeach
            </select>
          </td>
        </tr>
        <tr>
          <th class="th_info">希望勤務開始時間</th>
          <td class="td_info"><input type="time" name="desired_work_start_time" value="{{$item ->user_detail -> desired_work_start_time}}"></td>
        </tr>
        <tr>
          <th class="th_info">希望勤務終了時間</th>
          <td class="td_info"><input type="time" name="desired_work_end_time" value="{{$item ->user_detail -> desired_work_end_time}}"></td>
        </tr>
        <tr>
          <th class="th_info">こだわり</th>
          <td class="td_info">
            @foreach (config('const.suitable_type') as $key => $value)
              <input type="checkbox" name="suitable_type[]" id="suitable_type{{ $key }}"  value="{{ $key }}">{{ $value }}<br>
            @endforeach
          </td>
        </tr>
      </table>
    </div>
    <div class="profile_links">
      <input type="button" onclick="history.back()" class="btn_submit" value="戻る">
      <input type="submit" class="btn_submit" value="変更する">
    </div>
  </form>
</div>
@endsection