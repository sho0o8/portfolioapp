@extends('layout.job')

@section('title','confirm')

@section('content')
<div class="profile_content">
  <div class="profile_title">
    <h1>プロフィール画面</h1>
  </div>
  <form ,method="post" action="/mypage/profile/change">
  @csrf
    <div class="profile">
      <table class="profile_info">
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
          <td class="td_info"><input type="tel" name="tel" value="{{old('tel')}}"></td>
        </tr>
        <tr>
          <th class="th_info">■E-mail</th>
          <td class="td_info"><input type="email" name="mail" value="{{old('mail')}}"></td>
        </tr>
        <tr>
          <th class="th_info">■都道府県</th>
          <td class="td_info">
            <select name="prefectures" value="{{old('prefectures')}}">
              @foreach (config('const.preflist') as $key => $value)
              <option value="{{ $key }}">{{ $value }}</option>
              @endforeach
            </select>
          </td>
        </tr>
        <tr>
          <th class="th_info">■最寄り駅</th>
          <td class="td_info"><input type="closest_station" name="closest_station" value="{{old('closest_station')}}"></td>
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
      <table class="job_info">
        <tr>
          <th class="th_info">■希望雇用形態</th>
          <td class="td_info">
            <select name="status" value="{{old('status')}}">
              @foreach (config('const.working_status') as $key => $value)
              <option value="{{ $key }}">{{ $value }}</option>
              @endforeach
            </select>
        </td>
        </tr>
        <tr>
          <th class="th_info">■希望給与</th>
            <td class="td_info">
              <select name="salary_system" value="{{old('salary_system')}}">
                @foreach (config('const.salary_form') as $key => $value)
                <option value="{{ $key }}">{{ $value }}</option>
                @endforeach
              </select>
            <input type="text" name="salary" value="{{old('salary')}}">
          </td>
        </tr>
        <tr>
          <th class="th_info">■希望勤務時間</th>
          <td class="td_info"><input type="text" name="working_times" value="{{old('working_times')}}"></td>
        </tr>
      </table>
    </div>
    <div class="profile_links">
      <input type="submit" class="btn_submit">
    </div>
  </form>
</div>
@endsection