<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog | Home</title>
</head>
<body>
        <header>
            <h2>Blog gue</h2>
            <nav>
                <a href="/blog">HOME</a>
                <a href="/blog/tentang">TENTANG</a>
                <a href="/blog/contact">KONTAK</a>
            </nav>
        </header>
        <hr><br><br>

        <h3>@yield('judul_halaman')</h3>

        @yield('konten')

        <br><br><hr>
        <footer>
            <p>&copy;<a href="https://www.instagram.com/triard_13/">triard13</a>2020</p>
        </footer>
</body>
</html>