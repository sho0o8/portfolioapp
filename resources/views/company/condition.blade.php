@extends('layout.company')

@section('title','condition')

@section('content')
<div class="company_condition_content">
  <div class="company_condition_title">
    <h1>求人情報</h1>
  </div>
  <div class="company_condition_section">
    <form method="post" action="/login/job_condition">
      <table class="job_info">
        <tr>
          <th>職種</th>
          <td><input type="text" name="job" value="{{old('job')}}"></td>
        </tr>
        <tr>
          <th>電話番号</th>
          <td><input type="text" name="tell" value="{{old('tell')}}"></td>
        </tr>
        <tr>
          <th>都道府県</th>
          <td><input type="text" name="prefectures" value="{{old('prefectures')}}"></td>
        </tr>
        <tr>
          <th>電話番号</th>
          <td><input type="text" name="tell" value="{{old('tell')}}"></td>
        </tr>
        <tr>
          <th>最寄り駅</th>
          <td><input type="closest_station" name="mail" value="{{old('closest_station')}}"></td>
        </tr>
        <tr>
          <th>給与</th>
          <td><input type="text" name="salary" value="{{old('salary')}}"></td>
        </tr>
        <tr>
          <th>勤務時間</th>
          <td><input type="text" name="working_times" value="{{old('working_times')}}"></td>
        </tr>
        <tr>
          <th>勤務内容</th>
          <td><input type="text" name="job_content" value="{{old('job_content')}}"></td>
        </tr>
        <tr>
          <th>企業写真</th>
          <td><input type="file" name="job_picture" value="{{old('job_picture')}}"></td>
        </tr>
        <tr>
        <tr>
          <th>服装</th>
          <td><input type="text" name="clothes" value="{{old('clothes')}}"></td>
        </tr>
        <tr>
          <th>仕事の特徴</th>
          <td><input type="text" name="feature" value="{{old('feature')}}"></td>
        </tr>
        <tr>
          <th>シフトの特徴</th>
          <td><input type="text" name="shift" value="{{old('shift')}}"></td>
        </tr>
      </table>
      <input type="submit" value="作成">
      <input type="submit" value="後で">
    </form>
  </div>
</div>
  @endsection