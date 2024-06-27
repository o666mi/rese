<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rese</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/app.css') }}" />
    @yield('css')
</head>
<body>
<header class="header">
    <div class="header_inner">
        <a href="#sidemenu" class="nav_toggle">
            <div></div>
            <div></div>
            <div></div>
        </a>
        <div id="sidemenu" class="nav__menu">
            <form class="form" action="/logout" method="post">
                <a href="#" class="close-btn">&times;</a>
                <a href="/">Home</a>
                <a href="/logout">Logout</a>
                <a href="/my-page">Mypage</a>
            </form>
        </div>
        <a class="header__logo" href="">
            Rese
        </a>
        <div class="header__nav">
            @yield('header')
        </div>
    </div>
</header>
<main>
    @yield('main')
  </main>
</body>
</html>

