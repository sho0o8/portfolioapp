@extends('layout.company')

@section('title','change')

@section('content')
<div class="job_change">
  <div class="change_title">
    <h1>求人変更画面</h1>
  </div>
  <div class="change">
  <form method="post" action="/login/company_mypage">
    <div class="company_condition_section">
      @csrf
        <div class="company_info_form">
          <table class="company_info">
            <tr>
              <th class="th_info">■企業名</th>
              <td class="td_info"><input type="text" name="name" value="{{old('name')}}"></td>
            </tr>
            <tr>
              <th class="th_info">■都道府県</th>
              <td class="td_info"><input type="text" name="prefectures" value="{{old('prefectures')}}"></td>
            </tr>
            <tr>
              <th class="th_info">■勤務地</th>
              <td class="td_info"><input type="text" name="address" value="{{old('address')}}"></td>
            </tr>
            <tr>
              <th class="th_info">■最寄り駅</th>
              <td class="td_info"><input type="closest_station" name="mail" value="{{old('closest_station')}}"></td>
            </tr>
            <tr>
              <th class="th_info">■電話番号</th>
              <td class="td_info"><input type="tel" name="tell" value="{{old('tell')}}"></td>
            </tr>
            <tr>
              <th class="th_info">■メールアドレス</th>
              <td class="td_info"><input type="email" name="mail" value="{{old('mail')}}"></td>
            </tr>
            <tr>
              <th class="th_info">■PASS</th>
              <td class="td_info"><input type="password" name="pass" value="{{old('pass')}}"></td>
            </tr>
          </table>
        </div>
        <div class="job_info_form">
          <table class="job_info">
            <tr>
              <th class="th_info">■企業写真</th>
              <td class="td_info"><input type="file" name="job_picture" value="{{old('job_picture')}}"></td>
            </tr>
            <tr>
              <th class="th_info">■職種</th>
              <td class="td_info"><input type="text" name="job" value="{{old('job')}}"></td>
            </tr>
            <tr>
              <th class="th_info">■雇用形態</th>
              <td class="td_info">
                <select name="status" value="{{old('status')}}">
                  <option value="" selected="selected">選択してください</option>
                  <option value="アルバイト">アルバイト</option>
                  <option value="正社員">正社員</option>
                  <option value="契約社員">契約社員</option>
                  <option value="派遣">派遣</option>
                  <option value="業務委託">業務委託</option>
                </select>
              </td>
            </tr>
            <tr>
              <th class="th_info">■給与</th>
              <td class="td_info">
                <select name="salary_system" value="{{old('salary_system')}}">
                  <option value="" selected="selected">選択してください</option>
                  <option value="時給">時給</option>
                  <option value="日給">日給</option>
                  <option value="月給">月給</option>
                  <option value="年俸">年俸</option>
                  <option value="完全出来高">完全出来高</option>
                </select>
                <input type="text" name="salary" value="{{old('salary')}}">
              </td>
            </tr>
            <tr>
              <th class="th_info">■勤務時間</th>
              <td class="td_info"><input type="text" name="working_times" value="{{old('working_times')}}"></td>
            </tr>
            <tr>
              <th class="th_info">■求人タイトル</th>
              <td class="td_info"><input type="text" name="job_title" value="{{old('job_title')}}"></td>
            </tr>
            <tr>
              <th class="th_info">■求人内容</th>
              <td><textarea name="job_content" value="{{old('job_content')}}"></textarea></td>
            </tr>
            <tr>
              <tr>
                <th class="th_info">■服装</th>
                <td class="td_info"><input type="text" name="clothes" value="{{old('clothes')}}"></td>
              </tr>
              <tr>
                <th class="th_info">■この仕事向いている人</th>
                <td class="td_info">
                  <input type="checkbox" name="feature">実力主義<br>
                  <input type="checkbox" name="feature">お金を稼ぎたい<br>
                  <input type="checkbox" name="feature">スキル・経験を活かしたい<br>
                  <input type="checkbox" name="feature">淡々と仕事がしたい<br>
                  <input type="checkbox" name="feature">工夫を試しながら仕事がしたい<br>
                  <input type="checkbox" name="feature">チームで仕事をしたい<br>
                  <input type="checkbox" name="feature">個人で仕事をしたい<br>
                  <input type="checkbox" name="feature">挑戦・成長意欲が高い<br>
                  <input type="checkbox" name="feature">安定的に仕事がしたい<br>
                  <input type="checkbox" name="feature">好奇心・探究心が高い<br>
                  <input type="checkbox" name="feature">コミュニケーションを取ることが好き<br>
                  <input type="checkbox" name="feature">考えることが好き<br>
                  <input type="checkbox" name="feature">人に寄り添いたい<br>
                  <input type="checkbox" name="feature">プライベートも大切にしたい<br>
                  <input type="checkbox" name="feature">オンオフのメリハリを大切にしたい<br>
                  <input type="checkbox" name="feature">ものづくりが好き<br>
                </td>
              </tr>
              <tr>
                <th class="th_info">■備考</th>
                <td class="td_info"><textarea name="job_other" value="{{old('job_other')}}"></textarea></td>
              </tr>
          </table>
        </div>
      </div>
      <div class="job_info_btn">
        <input type="submit" class="btn_submit" value="変更">
        <input type="submit" class="btn_submit" value="戻る">
      </div>
    </form>
  </div>
</div>
  @endsection