<DOCTYPE HTML>
    <html lang="ja">
    <head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>

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
