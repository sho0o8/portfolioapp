@extends('layout.company')

@section('title','login')

@section('content')
<div class="company_content">
  <div class="company_login">
    <h4>ログインフォーム</h4>
    <form method="post" action="#">
      <label>E-mail：</label>
      <input type="text" name="user">
      <br>
      <label>PASS：</label>
      <input type="pass" name="pass">
      <br>
      <input type="submit" value="ログイン">
    </form>
  <!-- ログイン出来ない -->
    <a href="#company_not_login_modal">ログインができない方はこちら</a>
  <!-- ポップアップ -->
    <div class="modal_wrapper" id="company_not_login_modal">
      <a href="#!" class="modal_overlay"></a>
      <div class="modal_window">
        <div class="company_not_login_content">
          <h4>ログイン出来ない方</h4>
          <form method="post" action="#">
            <label>登録E-mail</label>
            <input type="mail" name="mail">
            <br>
            <input type="submit" name="send" value="送信">
          </form>
        </div>
        <a href="#" class="modal_close">✖️</a>
      </div>
    </div>
  </div>
  <!-- 新規登録フォーム -->
  <div class="company_register">
    <a href="#company_register_modal" class="company_register_title" >新規登録の方</a>
  <!-- ポップアップ -->
    <div class="modal_wrapper" id="company_register_modal">
      <a href="#!" class="modal_overlay"></a>
      <div class="modal_window">
        <div class="company_register_content">
          <h4>新規登録フォーム</h4>
          <form method="post" action="login#company_register_modal/job_condition">
            <label>企業名：</label>
            <input type="text" name="user">
            <br>
            <label>E-mail：</label>
            <input type="mail" name="mail">
            <br>
            <label>PASS：</label>
            <input type="pass" name="pass">
            <br>
            <label>PASS（確認）：</label>
            <input type="pass" name="repass">
            <br>
            <input type="submit" value="作成">
          </form>
        </div>
        <a href="#" class="modal_close">✖️</a>
      </div>
    </div>
  </div>
</div>
@endsection