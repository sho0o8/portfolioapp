@extends('layout.company')

@section('title','login')

@section('content')
<div class="company_content">
  <div class="company_login">
    <h1>ログインフォーム</h1>
    <form method="post" action="/login/company_mypage">
    @csrf
      <div class="company_login_form">
        <p class="company_login_items_label">E-mail：</p>
        <input type="email" class="company_login_items_input" name="user">
      </div>
      <div class="company_login_form">
        <p class="company_login_items_label">PASS：</p>
        <input type="password" class="company_login_items_input" name="pass">
      </div>
      <div class="login_btn">
        <input type="submit" class="btn_submit" value="ログイン">
      </div>
    </form>
  <!-- ログイン出来ない -->
      <a href="#company_not_login_modal" class="company_not_login">ログインができない方はこちら</a>
  <!-- ポップアップ -->
    <div class="modal_wrapper" id="company_not_login_modal">
      <a href="#!" class="modal_overlay"></a>
      <div class="modal_window">
        <div class="company_not_login_content">
          <h4>ログイン出来ない方</h4>
          <form method="post" action="/login/company_mypage">
          @csrf
            <div class="company_login_form">
              <p class="company_login_items_label">登録E-mail：</p>
              <input type="email" class="company_login_items_input" name="user">
            </div>
              <input type="submit" class="btn_submit" name="send" value="送信">
          </form>
        </div>
        <a href="#" class="modal_close">✖️</a>
      </div>
    </div>
  </div>
  <!-- 新規登録フォーム -->
  <div class="company_register">
    <a href="#company_register_modal" class="company_register_title" >新規登録の方はこちら</a>
  <!-- ポップアップ -->
    <div class="modal_wrapper" id="company_register_modal">
      <a href="#!" class="modal_overlay"></a>
      <div class="modal_window">
        <div class="company_register_content">
          <h4>新規登録フォーム</h4>
          <form method="post" action="login/job_condition">
          @csrf
            <div class="company_register_form">
              <p class="company_register_items_label">企業名：</p>
              <input type="text" class="company_register_items_input" name="user">
            </div>
            <div class="company_register_form">
              <p class="company_register_items_label">E-mail：</p>
              <input type="email" class="company_register_items_input" name="mail">
            </div>
            <div class="company_register_form">
              <p class="company_register_items_label">PASS：</p>
              <input type="password" class="company_register_items_input" name="pass">
            </div>
            <div class="company_register_form">
              <p class="company_register_items_label">PASS(確認)：</p>
              <input type="password" class="company_register_items_input" name="pass">
            </div>
            <div class="company_register_btn">
                  <input type="submit" class="btn_submit" value="新規登録">
            </div>
          </form>
        </div>
        <a href="#" class="modal_close">✖️</a>
      </div>
    </div>
  </div>
</div>
@endsection