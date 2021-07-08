@extends('layouts.job')

@section('title','main')

@section('content')
<div class="main_content">
  <!-- <div class="search_content">
    <form method="post" action="#">
      @csrf
      <div class="search_form">
        <p class="search_form_label">並べ替え</p>
        <select class="search_form_items_select" name="sort">
          @foreach (config('const.sort_type') as $key => $value)
          <option value="{{ $key }}">{{ $value }}</option>
          @endforeach
        </select>
      </div>
      <div class="search_form">
        <p class="search_form_label">給与</p>
        <select class="search_form_items_select" name="salary_system">
          @foreach (config('const.salary_form') as $key => $value)
          <option value="{{ $key }}">{{ $value }}</option>
          @endforeach
        </select>
        <input type="text" name="min_salary"><span>円〜</span><input type="text" name="max_salary"><span>円</span>
      </div>
      <div class="search_form">
        <p class="search_form_label">こだわり</p>
        <div class="commit_form">
          <input type="checkbox" name="commit">在宅ワークOK
          <input type="checkbox" name="commit">未経験・初心者大歓迎
          <input type="checkbox" name="commit">学歴不問<br>
          <input type="checkbox" name="commit">副業・WワークOK
          <input type="checkbox" name="commit">駅から徒歩5分圏内
          <input type="checkbox" name="commit">車・バイク通勤OK<br>
          <input type="checkbox" name="commit">交通費支給
          <input type="checkbox" name="commit">まかない・食事補助
          <input type="checkbox" name="commit">ネイルOK<br>
          <input type="checkbox" name="commit">髪型・髪色自由
          <input type="checkbox" name="commit">即日勤務OK
        </div>
      </div>
      <div class="search_btn">
            <input type="submit" class="btn_search" value="絞り込み">
      </div>
    </form>
  </div> -->
  <div class="job_content">
    <div class="job_gallery">
      <img src="{{ asset('images/img5.jpg')}}" alt="">
    </div>
    <div class="job_preview">
      <p class="job_preview_label">求人件名</p>
      <p>{{$item->title}}</p>
    </div>
    <div class="job_preview">
      <p class="job_preview_label">企業名</p>
      <p>{{$item->name}}</p>
    </div>
    <div class="job_preview">
      <p class="job_preview_label">職種</p>
      <p>{{config('const.job_type.'.$item->job_type)}}</p>
    </div>
    <div class="job_preview">
      <p class="job_preview_label">雇用形態</p>
      <p>{{config('const.working_status.'.$item->salary_form)}}</p>
    </div>
    <div class="job_preview">
      <p class="job_preview_label">勤務地</p>
      <p>{{$item->address}}</p>
    </div>
    <div class="job_preview">
      <p class="job_preview_label">給与</p>
      <p>{{config('const.salary_form.'.$item->salary_form)}}
        {{$item->salary}}<span>円</span></p>
    </div>
    <div class="job_links">
      <a href="" class="btn_job_links">興味あり</a>
      <a href="" class="btn_job_links">興味なし</a>
  <!-- 詳細ポップアップ表示ボタン -->
      <button class="detail_btn btn_job_links">詳細</button>
  <!-- ポップアップ -->
      <div class="popup">
        <div class="job_detail_content">
          <div class="job_detail_title">
            <h1>{{$item->title}}</h1>
          </div>
          <div class="job_preview">
            <p class="job_preview_label">職種</p>
            <p>{{config('const.job_type.'.$item->job_type)}}</p>
          </div>
          <div class="job_preview">
            <p class="job_preview_label">雇用形態</p>
            <p>{{config('const.working_status.'.$item->salary_form)}}</p>
          </div>
          <div class="job_preview">
            <p class="job_preview_label">給与</p>
            <p>{{config('const.salary_form.'.$item->salary_form)}}
        {{$item->salary}}<span>円</span></p>
          </div>
          <div class="job_preview">
            <p class="job_preview_label">仕事内容</p>
            <p>{{$item->offer}}</p>
          </div>
          <div class="job_preview">
            <p class="job_preview_label">勤務地</p>
            <p>{{$item->address}}</p>
          </div>
          <div class="job_preview">
            <p class="job_preview_label">勤務時間</p>
            <p>{{$item->work_start_time}} <span>〜</span> {{$item->work_end_time}}</p>
          </div>
          <div class="job_preview">
            <p class="job_preview_label">おすすめの人</p>
            <p>○○○○○○○○○○○○○○○</p>
          </div>
          <div class="job_preview">
            <p class="job_preview_label">備考</p>
            <p>{{$item->other}}</p>
          </div>
          <button class="close">閉じる</button>
        </div>
      </div>
      <a href="/apply" class="btn_job_links">応募する</a>
    </div>
  </div>
</div>
<!-- jquery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>
$('.detail_btn').on('click',function(){
    $('.popup').addClass('show').fadeIn();
});
$('.close').on('click',function(){
    $('.popup').fadeOut();
});
</script>
  @endsection