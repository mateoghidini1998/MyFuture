<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>
        @yield("title")
    </title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" href="/css/styles.css">

    @yield("css")
    @yield("js")
</head>

<body>
    <div class="container">

        <header style="display:none">
            <nav class="navbar navbar-expand-sm bg-dark">
                <ul class="navbar-nav">
                    <li style="font-family: 'Cinzel Decorative', cursive; color: white; font-size: 30px" class="nav-item">myFuture</li>
                    @if (Auth::check())
                    <li class="nav-item">
                        <a style="color: white" class="nav-link" href="/posts">Posts</a>
                    </li>

                    <li class="nav-item">
                        <a style="color: white" class="nav-link" href="/users">Users</a>
                    </li>
                    @endif
                    @if (Auth::check())
                    <li class="nav-item">
                        <a style="color: white" class="nav-link" href="/posts/add">Add a post</a>
                    </li>
                    @endif
                </ul>

                <form action="/search" method="get">
                    @csrf

                    <input class="form-control" type="text" name="search">
                    <button type="submit" name="button" class="btn btn-primary">Search</button>

                </form>

                </nav>


                <nav class="navbar navbar-expand-sm bg-dark">
                    <ul class="navbar-nav">
                        @if (Auth::check())
                        <li class="nav-item" style="color: white">
                            Hello {{Auth::user()->name}}!
                        </li>
                        <img src="/storage/{{Auth::user()->avatar}}" alt="">
                        <li class="nav-item">
                            <a style="color: red" href="{{ route('logout') }}" onclick="event.preventDefault();
                                   document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </li>
                        @else
                        <li class="nav-item">
                            <a style="color: white" href="/register">Register</a>
                        </li>
                        <li class="nav-item">
                            <a style="color: white" href="/login">Login</a>
                        </li>
                        @endif

                    </ul>



                </nav>


        </header>
        <main>
            @yield("main")

        </main>
        <footer>
            My Future 2019
        </footer>
    </div>
</body>



</html>
