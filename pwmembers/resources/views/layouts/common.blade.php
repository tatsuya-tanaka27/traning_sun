<html>
    <html lang="ja">
    <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<!-- jQuery読み込み -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<!-- PopperのJS読み込み -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
<!-- BootstrapのJS読み込み -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>



    </head>
    <header>
        <nav class="navbar navbar-expand-sm navbar-dark bg-dark mt-3 mb-3">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav4" aria-controls="navbarNav4" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand" href="/top">PW members</a>
            <div class="collapse navbar-collapse justify-content-end">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="/form">お問い合わせ</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">ヘルプ/サポート</a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="/help">・ヘルプ</a>
                            <a class="dropdown-item" href="/support">・サポート</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="#">ダウンロード</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

</div>
    <body>
            <div class="container-fluid">

                <div class="contents border-secondary" style="padding: 5px">
                    @yield('content')
                </div>

            </div>
    <p></p>
    </body>
<!-- Footer -->
<footer class="bg-light text-lg-start">
    <!-- Copyright -->
    <div class="text-center text-light p-3 bg-dark">
      © 2020 Copyright:
      <a class="text-light" href="https://mdbootstrap.com/">PW members.com</a>
    </div>
    <!-- Copyright -->
  </footer>
<!-- Footer -->

</html>
