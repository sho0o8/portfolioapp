@extends('layouts.company_mypage')

@section('title','condition')

@section('content')
<div class="company_condition_content">
  <div class="company_condition_title">
    <h1>企業・求人情報</h1>
  </div>
  <div class="company_condition_all">
    <form method="post" action="/company/job_condition">
    <div class="company_condition_section">
      @csrf
        <div class="job_info_form">
          <table class="job_info">
              <th class="th_info">職種</th>
                <td class="td_info">
                  <select name="job_type" value="">
                    @foreach (config('const.job_type') as $key => $value)
                    <option value="{{ $key }}">{{ $value }}</option>
                    @endforeach
                </select>
              </td>
            </tr>
            <tr>
              <th class="th_info">雇用形態</th>
              <td class="td_info">
                <select name="working_status" value="">
                    @foreach (config('const.working_status') as $key => $value)
                  <option value="{{ $key }}">{{ $value }}</option>
                    @endforeach
                </select>
              </td>
            </tr>
            <tr>
              <th class="th_info">給与</th>
              <td class="td_info">
                <select name="salary_form" value="">
                    @foreach (config('const.salary_form') as $key => $value)
                    <option value="{{ $key }}">{{ $value }}</option>
                    @endforeach
                </select>
                <input type="text" name="salary" value="">
                <span>円〜</span>
              </td>
            </tr>
            <tr>
              <th class="th_info">勤務開始時間</th>
              <td class="td_info"><input type="time" name="work_start_time" value=""></td>
            </tr>
            <tr>
              <th class="th_info">勤務終了時間</th>
              <td class="td_info"><input type="time" name="work_end_time" value=""></td>
            </tr>
            <tr>
              <th class="th_info">求人タイトル</th>
              <td class="td_info"><input type="text" name="title" value=""></td>
            </tr>
            <tr>
              <th class="th_info">求人内容</th>
              <td class="td_info"><textarea name="offer" value=""></textarea></td>
            </tr>
            <tr>
              <tr>
                <th class="th_info">待遇</th>
                <td class="td_info"><input type="text" name="treatment" value=""></td>
              </tr>
              <tr>
                <th class="th_info">服装</th>
                <td class="td_info"><input type="text" name="clothes" value=""></td>
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
                <td class="td_info"><textarea name="other" value=""></textarea></td>
              </tr>
          </table>
        </div>
      </div>
      <div class="job_info_btn">
        <input type="submit" class="btn_submit" value="作成">
      </div>
    </form>
  </div>
</div>
@endsection