<DOCTYPE HTML>
    <html lang="ja">
    <head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
        <!-- BootstrapのCSS読み込み -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <!-- jQuery読み込み -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <!-- BootstrapのJS読み込み -->
        <script src="js/bootstrap.min.js"></script>
    </head>
    <body>
     @section
     <header class="header">
        <img src="ヘッダー_navy新.png" >
     </header>
     @endsection



    <div class="contents">
        <!-- コンテンツ -->
        <div class="main">
            @yield('content')
        </div>


     @section
     <footer class="footer">
         <img src="ヘッダー_navy新.png ">
     </footer>
     @endsection

    </body>
    </html>
