@extends('layout.index')

@section('title','Meets')

@section('content')
    <div class="top_page_content">
        <h1>新しい仕事探しへ</h1>
<!-- リンク -->
        <div class="links">
<!-- 新規登録フォーム -->
            <a href="#register_modal" class="btn_signup from_left">新規登録はこちら</a>
<!-- ポップアップ -->
            <div class="modal_wrapper" id="register_modal">
                <a href="#!" class="modal_overlay"></a>
                <div class="modal_window">
                    <div class="register_content">
                        <h4>新規登録フォーム</h4>
                        <form method="post" action="/mypage">
                        @csrf
                        <div class="modal_form">
                            <p class="modal_items_label">ユーザー名：</p>
                            <input type="text" class="modal_items_input" name="user">

                        </div>
                        <div class="modal_form">
                            <p class="modal_items_label">E-mail：</p>
                            <input type="email" class="modal_items_input" name="mail">
                        </div>
                        <div class="modal_form">
                            <p class="modal_items_label">PASS：</p>
                            <input type="password" class="modal_items_input" name="pass">
                        </div>
                        <div class="modal_form">
                            <p class="modal_items_label">PASS(確認)：</p>
                                <input type="password" class="modal_items_input" name="pass">
                        </div>
                        <div class="modal_btn">
                            <input type="submit" class="btn_submit" value="新規登録">
                        </div>
                        </form>
                    </div>
                    <a href="#" class="modal_close">✖️</a>
                </div>
            </div>
<!-- ログインフォーム -->
            <a href="#login_modal" class="btn_login from_left">ログインはこちら</a>
<!-- ポップアップ -->
            <div class="modal_wrapper" id="login_modal">
                <a href="#!" class="modal_overlay"></a>
                <div class="modal_window">
                    <div class="login_content">
                        <h4>ログインフォーム</h4>
                        <form method="post" action="/mypage">
                        @csrf
                        <div class="modal_form">
                            <p class="modal_items_label">ユーザー名：</p>
                            <input type="text" class="modal_items_input" name="user">
                        </div>
                        <div class="modal_form">
                            <p class="modal_items_label">PASS：</p>
                            <input type="password" class="modal_items_input" name="pass">
                        </div>
                        <div class="modal_btn">
                            <input type="submit" class="btn_submit" value="ログイン">
                        </div>
                        </form>
                        <a href="#" class="not_login">ログインができない方はこちら</a>
                    </div>
                    <a href="#" class="modal_close">✖️</a>
                </div>
            </div>
        </div>
    </div>
@endsection