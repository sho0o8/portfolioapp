<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <!-- STYLE -->
    <link rel="stylesheet" href="{{ asset('css/portfolio.css')}}">
    <title>@yield('title')</title>
  </head>
  <body>
    <header>
      <div class="header_left">
        <a href="/"><img src="{{asset('/images/logo_transparent.png')}}" alt="ロゴ"></a>
      </div>
      <nav class="pc_nav">
        <ul>
          <li><a href="about">サービスについて</a></li>
          <li><a href="#">求職者の方はこちら</a></li>
          <li><a href="contact">お問い合せ</a></li>
        </ul>
      </nav>
    </header>
    @yield('content')
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