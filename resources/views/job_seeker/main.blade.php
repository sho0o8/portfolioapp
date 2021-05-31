@extends('layout.job')

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
  <div class="job_links">
    <a href="" class="btn-orange btn-radius">興味あり</a>
    <a href="" class="btn-orange btn-radius">興味なし</a>
<!-- 詳細 -->
    <a href="#detail_modal" class="btn-orange btn-radius open_button">詳細</a>
<!-- ポップアップ -->
            <div class="modal_wrapper" id="detail_modal">
                <a href="#!" class="modal_overlay"></a>
                <div class="modal_window">
                    <div class="detail_content">
                        <h4>求人情報の詳細</h4>
                    </div>
                    <a href="#" class="modal_close">✖️</a>
                </div>
            </div>

    <a href="/apply" class="btn-orange btn-radius">応募する</a>
  </div>
</div>
  @endsection