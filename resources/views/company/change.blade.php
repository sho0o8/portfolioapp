@extends('layouts.company_mypage')

@section('title','change')

@section('content')
<div class="job_change">
  <div class="change_title">
    <h1>求人変更画面</h1>
  </div>
  <div class="change">
  <form method="post" action="/company/change">
    <div class="company_condition_section">
      @csrf
        <div class="company_info_form">
          <table class="company_info">
            <tr>
              <th class="th_info">企業名</th>
              <td class="td_info"><input type="text" name="name" value="{{$item->name}}"></td>
            </tr>
            <tr>
              <th class="th_info">都道府県</th>
              <td class="td_info">
                <select name="prefectures" value="{{$item->prefectures}}">
                    @foreach (config('const.preflist') as $key => $value)
                    <option value="{{ $key }}">{{ $value }}</option>
                    @endforeach
                </select>
              </td>
            </tr>
            <tr>
              <th class="th_info">勤務地</th>
              <td class="td_info"><input type="text" name="address" value="{{$item->address}}"></td>
            </tr>
            <tr>
              <th class="th_info">最寄り駅</th>
              <td class="td_info"><input type="nearest_station" name="mail" value="{{$item->nearest_station}}"></td>
            </tr>
            <tr>
              <th class="th_info">電話番号</th>
              <td class="td_info"><input type="tel" name="tel" value="{{$item->tel}}"></td>
            </tr>
            <tr>
              <th class="th_info">メールアドレス</th>
              <td class="td_info"><input type="email" name="email" value="{{$item->email}}"></td>
            </tr>
            <tr>
              <th class="th_info">PASS</th>
              <td class="td_info"><input type="password" name="password" value="{{$item->password}}"></td>
            </tr>
          </table>
        </div>
        <div class="job_info_form">
          <table class="job_info">
              <th class="th_info">職種</th>
              <td class="td_info">
                <select name="job_type" value="{{$item->offer->job_type}}">
                    @foreach (config('const.job_type') as $key => $value)
                      <option value="{{ $key }}">{{ $value }}</option>
                    @endforeach
                </select>
              </td>
            </tr>
            <tr>
              <th class="th_info">雇用形態</th>
              <td class="td_info">
                <select name="working_status" value="{{$item->offer->working_status}}">
                    @foreach (config('const.working_status') as $key => $value)
                    <option value="{{ $key }}">{{ $value }}</option>
                    @endforeach
              </td>
            </tr>
            <tr>
              <th class="th_info">給与</th>
                <td class="td_info">
                  <select name="salary_form" value="{{$item->offer->salary_form}}">
                    @foreach (config('const.salary_form') as $key => $value)
                    <option value="{{ $key }}">{{ $value }}</option>
                    @endforeach
                  </select>
                <input type="text" name="salary" value="{{$item->offer->salary}}">
                <span>円〜</span>
              </td>
            </tr>
            <tr>
              <th class="th_info">勤務開始時間</th>
              <td class="td_info"><input type="time" name="work_start_time" value="{{$item->offer->work_start_time}}"></td>
            </tr>
            <tr>
              <th class="th_info">勤務終了時間</th>
              <td class="td_info"><input type="time" name="work_end_time" value="{{$item->offer->work_end_time}}"></td>
            </tr>
            <tr>
              <th class="th_info">求人タイトル</th>
              <td class="td_info"><input type="text" name="title" value="{{$item->offer->title}}"></td>
            </tr>
            <tr>
              <th class="th_info">求人内容</th>
              <td><textarea name="offer" value="{{$item->offer->offer}}">{{$item->offer->offer}}</textarea></td>
            </tr>
            <tr>
              <tr>
                <th class="th_info">待遇</th>
                <td class="td_info"><input type="text" name="treatment" value="{{$item->offer->treatment}}"></td>
              </tr>
              <tr>
                <th class="th_info">服装</th>
                <td class="td_info"><input type="text" name="clothes" value="{{$item->offer->clothes}}"></td>
              </tr>
              <tr>
                <th class="th_info">この仕事向いている人</th>
                <td class="td_info">
                @foreach (config('const.suitable_type') as $key => $value)
                  <input type="checkbox" name="suitable_type[]" id="suitable_type{{ $key }}"  value="{{ $key }}">{{ $value }}<br>
                @endforeach
                </td>
              </tr>
              <tr>
                <th class="th_info">備考</th>
                <td class="td_info"><textarea name="other" value="{{$item->offer->other}}">{{$item->offer->other}}</textarea></td>
              </tr>
          </table>
        </div>
      </div>
      <div class="job_info_btn">
        <input type="submit" class="btn_submit" value="変更">
      </div>
    </form>
  </div>
</div>
  @endsection