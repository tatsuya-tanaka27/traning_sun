<html>
    <html lang="ja">
    <head>
    <meta charset="UTF-8">


    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('/resources/js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="/css/common.css">

    </head>
    <header>
        <nav class="navbar navbar-expand-sm navbar-dark bg-dark mt-3 mb-3">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav4" aria-controls="navbarNav4" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand" href="#">PW members</a>
            <div class="collapse navbar-collapse justify-content-end">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">お問い合わせ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">ヘルプ/サポート</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">ダウンロード</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

</div>
    <body>
    <div class="container-flex">
        <div class="row">
            <div class="col-md-2 col-lg-3">
            <div class="sidebar_fixed">
                <div class="d-flex flex-column bg-info p-3">
                    <h3 class="mt-3">ＭＥＮＵ</h3>
                    <div class="p-3 m-1 bg-white">お問い合わせ</div>
                    <div class="p-3 m-1 bg-white">ヘルプ</div>
                    <div class="p-3 m-1 bg-white">サポート</div>
                    <div class="p-3 m-1 bg-white">ダウンロード</div>
                  </div>
            </div>
            </div>
            <div class="col-md-10 col-lg-9 align-self-center">
                <div id="contents">
                @yield('content')
                </div>
            </div>
        </div>
    </div>
    <p></p>
    </body>
<!-- Footer -->
<footer class="text-center text-lg-start bg-light text-muted">
    <!-- Copyright -->
    <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05)">
      © 2021 Copyright: PW members.com
    </div>
    <!-- Copyright -->
  </footer>
<!-- Footer -->

</html>
