@extends('layouts.company_mypage')

@section('title','mypage')

@section('content')
<div class="company_mypage">
  <div class="company_mypage_title">
    <h1>管理画面</h1>
  </div>
  <div class="company_mypage_content">
    <div class="company_mypage_create">
      <div class="company_mypage_subtitle">
        <h2>求人作成</h2>
      </div>
      <a class="company_job_list" href="/company/job_condition">新規作成</a>
    </div>
    <div class="company_mypage_list">
      <div class="company_mypage_subtitle">
        <h2>求人一覧</h2>
      </div>
      <ul class="company_mypage_ul">
        <li><a class="company_job_list" href="/company/change"> 求人①</a></li>
      </ul>
    </div>
  </div>
</div>
@endsection