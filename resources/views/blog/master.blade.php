<html>
<head>
    <title>Tutorial Laravel | Sistem Template Blade Laravel</title>
</head>
<body>
    <header>
        <h2>Blog Laravel</h2>
        <nav>
            <a href="/blog">HOME</a>
            |
            <a href="/blog/tentang">TENTANG</a>
            |
            <a href="/blog/kontak">KONTAK</a>
        </nav>
    </header>
    <hr>
    <br>
    <br>

    <!-- bagian judul halaman blog -->
    <h3> @yield('judul_halaman')</h3>

    <!-- bagian konten blog -->
    @yield('konten')

    <br>
    <br>
    <hr>
    <footer>
        <p>&copy; <a href="www.binary.co.id">www.binary.co.id</a>.2020</a></p>
    </footer>
</body>
</html>