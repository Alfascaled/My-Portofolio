<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portofolio | Alfaizi Ahmad Zahran </title>

    <link rel="stylesheet" href="{{ asset(path: 'css/style.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>

<header>
    <nav>
        <a href="/">Home</a>
        <a href="/about">About</a>
        <a href="/contact">Contact</a>
    </nav>
</header>

<div class="content">
    @yield('content')
</div>

<footer>
    <p>© 2025 Portfolio Laravel</p>
</footer>

<script src="{{ asset('js/script.js') }}"></script>

</body>
</html>
