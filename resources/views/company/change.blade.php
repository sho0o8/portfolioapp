@extends('layout.company')

@section('title','change')

@section('content')
<div class="job_change">
  <div class="change_title">
    <h1>求人変更画面</h1>
  </div>
  <div class="change">
    <form method="post" action="">
      <table class="personal_change">
        <tr>
          <th>職種</th>
          <td><input type="text" name="job" value="{{old('job')}}"></td>
        </tr>
        <tr>
          <th>都道府県</th>
          <td><input type="text" name="prefectures" value="{{old('prefectures')}}"></td>
        </tr>
        <tr>
          <th>住所</th>
          <td><input type="text" name="address" value="{{old('prefectures')}}"></td>
        </tr>
        <tr>
          <th>最寄り駅</th>
          <td><input type="text" name="prefectures" value="{{old('prefectures')}}"></td>
        </tr>
        <tr>
          <th>給料</th>
          <td><input type="text" name="salary" value="{{old('salary')}}"></td>
        </tr>
        <tr>
          <th>勤務内容</th>
          <td><input type="text" name="job_content" value="{{old('job_content')}}"></td>
        </tr>
        <tr>
          <th>勤務日数</th>
          <td><input type="text" name="job_days" value="{{old('job_days')}}"></td>
        </tr>
        </tr>
        <tr>
          <th>勤務時間</th>
          <td><input type="text" name="working_times" value="{{old('working_times')}}"></td>
        </tr>
        <tr>
          <th>服装</th>
          <td><input type="text" name="clothes" value="{{old('clothes')}}"></td>
        </tr>
        <tr>
          <th>仕事の特徴</th>
          <td><input type="text" name="feature" value="{{old('feature')}}"></td>
        </tr>
        <tr>
          <th>仕事の画像</th>
          <td><input type="file" name="job_photo" value="{{old('job_photo')}}"></td>
        </tr>
      </table>
      <input type="submit" value="変更">
    </form>
  </div>
</div>
  @endsection