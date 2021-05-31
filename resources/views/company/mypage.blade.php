@extends('layout.company')

@section('title','mypage')

@section('content')
<div class="company_mypage">
  <div class="company_mypage_title">
    <h1>管理画面</h1>
  </div>
  <div class="company_mypage_content">
    <div class="company_mypage_create">
      <h3>求人作成</h3>
      <a href="/login/job_condition">新規作成</a>
    </div>
    <div class="company_mypage_list">
      <h3>求人一覧</h3>
      <ul>
        <li><a href="/company_mypage/change"> 求人①</a></li>
        <li><a href="/company_mypage/change"> 求人②</a></li>
        <li><a href="/company_mypage/change"> 求人③</a></li>
      </ul>
    </div>
  </div>
</div>
@endsection