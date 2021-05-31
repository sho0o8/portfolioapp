@extends('layout.index')

@section('title','Meets')

@section('content')
    <div class="top_page_content">
        <h1>新しい仕事探しへ</h1>
<!-- リンク -->
        <div class="links">
<!-- 新規登録フォーム -->
            <a href="#register_modal" class="btn_signup">新規登録はこちら</a>
<!-- ポップアップ -->
            <div class="modal_wrapper" id="register_modal">
                <a href="#!" class="modal_overlay"></a>
                <div class="modal_window">
                    <div class="register_content">
                        <h4>新規登録フォーム</h4>
                        <form method="post" action="#">
                            <label>ユーザー名：</label>
                            <input type="text" name="user">
                            <br>
                            <label>E-mail：
                            </label>
                            <input type="mail" name="mail">
                            <br>
                            <label>PASS：
                            </label>
                            <input type="pass" name="pass">
                            <br>
                            <label>PASS（確認）：
                            </label>
                            <input type="pass" name="repass">
                            <br>
                            <input type="submit" value="新規登録">
                        </form>
                    </div>
                    <a href="#" class="modal_close">✖️</a>
                </div>
            </div>
<!-- ログインフォーム -->
            <a href="#login_modal" class="btn_login">ログインはこちら</a>
<!-- ポップアップ -->
            <div class="modal_wrapper" id="login_modal">
                <a href="#!" class="modal_overlay"></a>
                <div class="modal_window">
                    <div class="login_content">
                        <h4>ログインフォーム</h4>
                        <form method="post" action="#">
                            <label>ユーザー名：</label>
                            <input type="text" name="user">
                            <br>
                            <label>PASS：
                            </label>
                            <input type="pass" name="pass">
                            <br>
                            <input type="submit" value="ログイン">
                        </form>
                        <a href="#">ログインができない方はこちら</a>
                    </div>
                    <a href="#" class="modal_close">✖️</a>
                </div>
            </div>
        </div>
    </div>
@endsection