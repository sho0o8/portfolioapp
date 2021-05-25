<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <!-- STYLE -->
    @yield('stylesheet')
    <title>@yield('title')</title>
  </head>
  <body>
    <header>
      <div class="header_left">
        <img src="{{asset('/images/logo_transparent.png')}}" alt="ロゴ">
      </div>
      <nav class="pc_nav">
        <ul>
          <li><a href="#">マイページ</a></li>
          <li><a href="#">ログアウト</a></li>
          <li><a href="contact">お問い合わせ</a></li>
        </ul>
      </nav>
    </header>
    <div class="content">
      @yield('content')
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