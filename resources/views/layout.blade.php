<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>@yield('title') - Galeri Seni</title>
    <style>
        * {
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            margin: 0;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }

        header, footer {
            background-color: #333;
            color: white;
            padding: 15px;
            text-align: center;
        }

        nav a {
            color: white;
            margin: 0 10px;
            text-decoration: none;
        }

        main {
            flex: 1;
            padding: 20px;
        }

        footer {
            font-size: 14px;
        }
    </style>
</head>
<body>
    <header>
        <h1>Galeri Seni</h1>
        <nav>
            <a href="/">Beranda</a>
            <a href="/profil">Profil Galeri</a>
            <a href="/layanan">Layanan</a>
            <a href="/galeri">Galeri</a>
            <a href="/kontak">Kontak</a>
        </nav>
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        &copy; {{ date('Y') }} Galeri Seni Indonesia
    </footer>
</body>
</html>
