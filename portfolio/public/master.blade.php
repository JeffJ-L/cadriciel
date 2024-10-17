<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="Author" content="Jeff Jean-Louis">
    <link rel="stylesheet" href="assets/css/main.css">
    <script src="assets/js/slider.js" defer></script>
    <title>@yield('title')</title>
</head>
<body>
    <nav>
        <a href="/">Accueil</a>
        <a href="/resume">Curiculum</a>
        <a href="/portfolio">Portfolio</a>
        <a href="/contact">Contact</a>
    </nav>

    @yield('content')

    <footer>
        <p>Tous droits reservés &copy; 2024 || Jeff Jean-Louis </p>
        <div class="reseaux">
            <img src="assets/img/linkedin.png" alt="linkedin logo">
            <img src="assets/img/github.png" alt="github logo">
            <img src="assets/img/artstation.png" alt="Artstation logo">
        </div>
    </footer>
</body>
</html>