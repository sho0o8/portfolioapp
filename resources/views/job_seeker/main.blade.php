@extends('layout.job')

<!-- Styles -->
@section('stylesheet')
  <link rel="stylesheet" href="{{ asset('css/portfolio.css')}}">
@endsection

@section('title','main')

@section('content')
<div class="job_content">
  <div class="job_gallery">
    <img src="{{ asset('images/img1.jpg')}}" alt="">
  </div>
  <div class="job_preview">
    <table class="table_02" align="center">
      <tr class="tr_02">
        <th class="th_02">企業（職種）：</th>
        <td class="td_02">〇〇○○</td>
      </tr>
      <tr class="tr_02">
        <th class="th_02">勤務地：</th>
        <td class="td_02">〇〇○○</td>
      </tr>
      <tr class="tr_02">
        <th class="th_02">時給：</th>
        <td class="td_02">○○○円</td>
      </tr>
      <tr class="tr_02">
        <th class="th_02">仕事の特徴：</th>
        <td class="td_02">○○○、○○○</td>
      </tr>
    </table>
  </div>
  <div class="links">
    <a href="" class="btn btn-orange btn-radius">興味がない</a>
    <a href="" class="btn btn-orange btn-radius">興味あり</a>
    <a href="" class="btn btn-orange btn-radius">詳細</a>
    <a href="" class="btn btn-orange btn-radius">応募する</a>
  </div>
</div>
  @endsection