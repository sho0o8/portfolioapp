@extends('layouts.index')

@section('title','Meets')

@section('content')
    <div class="top_page_content">
        <h1>新しい仕事探しへ</h1>
<!-- リンク -->
        <div class="links">
<!-- 新規登録フォーム -->
            <a href="/register" class="btn_signup from_left">新規登録はこちら</a>
<!-- ポップアップ -->
            <!-- <div class="register_popup">
                <div class="modal_window">
                    <div class="register_content">
                        <h4>新規登録フォーム</h4>
                        <form method="post" action="/">
                        @csrf
                            <div class="modal_form">
                                <p class="modal_items_label">ユーザー名：</p>
                                <input type="text" class="modal_items_input" name="name">
                            </div>
                            <div class="modal_form">
                                <p class="modal_items_label">E-mail：</p>
                                <input type="email" class="modal_items_input" name="email">
                            </div>
                            <div class="modal_form">
                                <p class="modal_items_label">PASS：</p>
                                <input type="password" class="modal_items_input" name="password">
                            </div>
                            <div class="modal_form">
                                <p class="modal_items_label">PASS(確認)：</p>
                                <input type="password" class="modal_items_input" name="remember_password">
                            </div>
                            <div class="modal_btn">
                                <input type="submit" class="btn_submit" value="新規登録">
                            </div>
                        </form>
                    </div>
                    <a href="/" class="modal_close">✖️</a>
                </div>
            </div> -->
<!-- ログインフォーム -->
            <a href="/login" class="btn_login from_left">ログインはこちら</a>
<!-- ポップアップ -->
            <!-- <div class="login_popup">
                <div class="modal_window">
                    <div class="login_content">
                        <h4>ログインフォーム</h4>
                        <form method="post" action="/login">
                        @csrf
                        <div class="modal_form">
                            <p class="modal_items_label">Email：</p>
                            <input type="text" class="modal_items_input" name="name">
                        </div>
                        <div class="modal_form">
                            <p class="modal_items_label">PASS：</p>
                            <input type="password" class="modal_items_input" name="password">
                        </div>
                        <div class="modal_btn">
                            <input type="submit" class="btn_submit" value="ログイン">
                        </div>
                        </form>
                    </div>
                    <a href="/" class="modal_close">✖️</a>
                </div>
            </div>
        </div>
    </div> -->
<!-- jquery -->
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>
$('.btn_signup').on('click',function(){
    $('.register_popup').addClass('show').fadeIn();
});
$('.modal_close').on('click',function(){
    $('.register_popup').fadeOut();
});
</script>
<script>
$('.btn_login').on('click',function(){
    $('.login_popup').addClass('show').fadeIn();
});
$('.modal_close').on('click',function(){
    $('.login_popup').fadeOut();
});
</script> -->
@endsection