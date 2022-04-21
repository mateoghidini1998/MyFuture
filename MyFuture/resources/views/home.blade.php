    @extends("layout")
    @extends('layouts.app')

    @section("title")
    Welcome!
    @endsection


    @section("main")

    <body style="background-image: url(../../storage/tree.jpg); background-repeat: no-repeat;background-attachment: fixed;background-size: cover;">
        <div class="jumbotron">
            <marquee scrollamount="3" direction="up">

                <h1 style="font-size: 80px">Bienvenido a MyFuture</h1><br>
            </marquee>
            @if (Auth::check())
            <h2>Check Posts</h2>
            <a href="/posts">
                <button class="btn btn-primary" type="button" name="button">Posts</button>
            </a>
            @else
            <h2>Para usar la fabulosa red social de My Future, debes estar registrado</h2><br>
            <h3>No estas registrado aun?
                <a href="/register">
                    <button class="btn btn-warning">Registrate aqui!</button>
                </a> </h3> <br>

            <h3>Si estas registado y quieres loguearte
                <a href="/login">
                    <button class="btn btn-info">Logueate Aqui</button>
                </a>
            </h3> <br>

            @endif
        </div>
    </body>
    @endsection
