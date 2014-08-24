<!DOCTYPE html>
<html>
<head>
    <title>Candy Forum</title>
    <link rel="stylesheet" href="{{ asset('./css/reset.css') }}"/>
    <link rel="stylesheet" href="{{ asset('./css/bootstrap.css') }}"/>
    <link rel="stylesheet" href="{{ asset('./css/spacelab.theme.css') }}"/>
    <link rel="stylesheet" href="{{ asset('./css/main.css') }}"/>
    <script src="{{ asset('./js/jquery-1.11.1.min.js') }}"></script>
    <script src="{{ asset('./js/bootstrap.min.js') }}"></script>
</head>
<body>
<header>
    <h1>Candy forum Header</h1>
</header>
<main>
    @yield('content')
</main>
<footer>
    <h2>Candy Forum Footer</h2>
</footer>
</body>
</html>