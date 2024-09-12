<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Книжная полка')</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:ital,opsz,wght@0,6..12,200..1000;1,6..12,200..1000&display=swap" rel="stylesheet">
</head>
<body>
    <header class="header">
        <div class="container">
            <h2 class="header__title">"Книжная полка" - управляем авторами и книгами</h2>
        </div>
    </header>
    <main class="main">
        <div class="container">
            @yield('content')
        </div>
    </main>
    <footer class="footer">
        <div class="container">
            <h4 class="footer__title">Учебный проект - 2024</h4>
        </div>
    </footer>
</body>
</html>