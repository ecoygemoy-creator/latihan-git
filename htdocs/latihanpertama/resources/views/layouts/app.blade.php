
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Profil Organisasi')</title>

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>

    <header class="header">
        <h1>Profil Organisasi Kita</h1>

        <nav>
            <a href="{{ url('/') }}">Home</a>
            <a href="{{ url('/gallery') }}">Gallery</a>
            <a href="{{ url('/about') }}">About</a>
        </nav>
    </header>

    <div class="container">
        @yield('content')
    </div>

    <footer class="footer">
        <p>&copy; 2024 {{ config('app.name') }}. Hak Cipta Dilindungi.</p>
        <p>Dibuat dengan Laravel Blade.</p>
    </footer>

</body>
</html>
