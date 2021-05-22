<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/top_page.css')}}">
        <title>Meets</title>
    </head>

    <body>
        <header>
            <div class="header_left">
                <img src="{{asset('/images/logo_transparent.png')}}" alt="ロゴ">
            </div>
            <nav class="pc_nav">
                <ul>
                    <li><a href="#">サービスについて</a></li>
                    <li><a href="#">企業の方はこちら</a></li>
                    <li><a href="#">お問い合せ</a></li>
                </ul>
            </nav>
        </header>

            <div class="content">
                <h1>新しい仕事探しへ</h1>
                <div class="links">
                    <a href="#" class="btn signup">新規登録はこちら</a>
                    <a href="#" class="btn login">ログインはこちら</a>
                </div>
            </div>
        <footer>
            <div class="snss">
                <span class="fa fa-instagram fa-2x"><a href="#"></a></span>
                <span class="fa fa-twitter fa-2x"><a href="#"></a></span>
            </div>
            <div class="copy">
                <p>&copy; 2021 All Rights Reserved.</p>
            </div>
        </footer>
    </body>
</html>
