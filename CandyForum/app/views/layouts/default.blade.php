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
    <script src="{{ asset('js/common.js') }}"></script>
</head>
<body>
    <div class="container">
        <header class="row">
            <div class="col-lg-12">
                <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand logo" href="/">Candy Forum</a>
                    </div>
                    <div class="navbar-collapse collapse">
                        <ul class="nav navbar-nav">
                            <li><a href="">test1</a></li>
                            <li><a href="">test2</a></li>
                            <li><a href="">test3</a></li>
                        </ul>
                        <ul class="nav navbar-nav navbar-right">
                            @if( Auth::check() )
                            <li><a href="/user/profile/show">{{'Hello, '. Auth::user()->username}}</a></li>
                            <li><a href="/logout">Log out</a></li>
                            @else
                            <li><a href="/login">Log In</a></li>
                            <li><a href="/register">Register</a></li>
                            @endif
                        </ul>
                    </div>
                </nav>
            </div>
        </header>
    </div>
    <div class="container main-content">
        <main class="row">
            <aside class="col-lg-3" id="categories">
                @if(Auth::check())
                    <button type="button" onclick="addPost();">Add Post</button>
                @endif
                <h2>Categories</h2>
                <ul id="categories-list">
                    <li><a href="">Lorem ipsum dolor sit amet,</a></li>
                    <li><a href="">consectetur adipisicing elit.</a></li>
                    <li><a href="">Architecto culpa distinctio</a></li>
                    <li><a href="">ex facere harum hic id</a></li>
                    <li><a href="">molestiae natus provident</a></li>
                    <li><a href="">tempora tenetur! Beatae</a></li>
                </ul>
            </aside>
            @yield('content')
        </main>
        <div class="row">
            <h2>Candy Forum footer</h2>
        </div>
    </div>
</body>
</html>