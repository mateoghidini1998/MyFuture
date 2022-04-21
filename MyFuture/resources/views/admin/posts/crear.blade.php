<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">

    <link rel="shortcut icon" href="http://nubecolectiva.com/favicon.ico" />

    <meta name="theme-color" content="#000000" />



    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/app.css') }}">

</head>

<body>

    <div class="container mt-5 mb-5">

        <div class="row">

            <div class="col-md-12">



                <div class="header">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-5">
                                <!-- Logo -->
                                <div class="logo">
                                    <h1>Administrador</h1>
                                </div>
                            </div>

                            <div class="col-md-2">
                                <div class="navbar navbar-inverse" role="banner">
                                    <nav class="collapse navbar-collapse bs-navbar-collapse navbar-right" role="navigation">
                                        <ul class="nav navbar-nav">
                                            <li><a href="{{ route('admin/dashboard') }}">Administrador</a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="page-content">
                    <div class="row">

                        <div class="col-md-2">
                            <div class="sidebar content-box" style="display: block;">

                                <ul class="list-group">
                                    <li class="list-group-item">
                                        <a style="color:red" href="{{ route('admin/dashboard') }}"> Dashboard</a>
                                    </li>
                                    <li class="list-group-item">
                                        <a style="color:red" href="{{ route('admin/users') }}"> Users</a>
                                    </li>
                                    <li class="list-group-item">
                                        <a style="color:red" href="">Posts</a>
                                    </li>
                                    <li class="list-group-item">
                                        <a style="color:red" href="{{ route('views/user', Auth::user()->id) }}">Go Back</a>
                                    </li>

                                </ul>
                            </div>
                        </div>

                        <div class="col-md-10">

                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a style="color:red" href="{{ route('admin/dashboard') }}">Home</a></li>
                                    <li class="breadcrumb-item"><a style="color:red" href="{{ route('admin/posts') }}">Posts</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Crear</li>
                                </ol>
                            </nav>

                            <div class="row">

                                <div class="col-md-12">

                                    <div class="content-box-large">

                                        <div class="panel-heading">
                                            <div class="panel-title">
                                                <h2>Crear</h2>
                                            </div>

                                        </div>

                                        <div class="panel-body">

                                            <section class="example mt-4">

                                                <form method="POST" action="{{ route('admin/posts/store') }}" role="form" enctype="multipart/form-data">

                                                    <input type="hidden" name="_method" value="PUT">
                                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">

                                                    @include('admin.posts.frm.prt')

                                                </form>

                                            </section>

                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

        <footer class="text-muted mt-3 mb-3">
            <div align="center">
                Desarrollado por <a href="/" target="_blank">myFuture&reg</a>
            </div>
        </footer>

        <!-- Bootstrap JS -->
        <script type="text/javascript" src="{{ URL::asset('js/app.js') }}"></script>

</body>

</html>
