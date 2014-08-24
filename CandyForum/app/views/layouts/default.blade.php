<!DOCTYPE html>
<html>
<head>
    <title>Candy Forum</title>
    <link rel="stylesheet" href="{{ asset('./css/reset.css') }}"/>
    <link rel="stylesheet" href="{{ asset('./css/main.css') }}"/>
</head>
<body>
<header>
    <h1>Candy Forum</h1>
</header>
<main>
    @yield('content')
</main>
<footer>
    <h2>Candy Forum Footer</h2>
</footer>
</body>
</html>