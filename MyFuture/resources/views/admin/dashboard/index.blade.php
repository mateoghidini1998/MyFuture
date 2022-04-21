<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <link rel="shortcut icon" href="http://nubecolectiva.com/favicon.ico" />

    <meta name="theme-color" content="#000000" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="../../css/app.css">

</head>

<body style="background-image: url(../../storage/tree.jpg)">

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
                            <div class="col-md-5">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="input-group form">
                                            <!--
                           <input type="text" class="form-control" placeholder="Buscar...">
                           <span class="input-group-btn">
                             <button class="btn btn-primary" type="button">Buscar</button>
                           </span>
                           -->
                                        </div>
                                    </div>
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
                                        <a style="color:red" href="{{ route('admin/posts') }}">Posts</a>
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
                                    <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                                </ol>
                            </nav>

                            <div class="row">

                                <div class="col-md-12">

                                    <div class="content-box-large">

                                        <div class="panel-body">

                                            <h1>Bienvenido al Administrador</h1>
                                            <h2>Aqui Puedes
                                                <marquee scrollamount="2" direction="up">

                                                    <ul style="list-style-type:none">
                                                        <strong>
                                                            <li>Crear Usuarios</li>
                                                            <li>Modificar informacion de Usuarios</li>
                                                            <li>Eliminar Usuarios</li>
                                                            <li>Crear Posteos</li>
                                                            <li>Modificar Posteos</li>
                                                            <li>Eliminar Posteos</li>
                                                        </strong>
                                                    </ul>
                                                </marquee>


                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

        <hr>





    </div>



    <footer class="text-muted mt-3 mb-3">

    </footer>

    <!-- Bootstrap JS -->
    <script type="text/javascript" src="../../js/app.js"></script>

</body>

</html>
