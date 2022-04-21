<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="theme-color" content="#000000" />


    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/app.css') }}">

</head>

<body style="background-image: url(../../storage/tree.jpg); background-repeat: no-repeat;background-attachment: fixed;background-size: cover;">
    <div class="pccp mt-5 mb-3" align="center">

    </div>


    <div class="container mb-5">

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
                                    <li class="breadcrumb-item"><a style="color:red" href="{{ route('admin/dashboard') }}">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Posts</li>
                                </ol>
                            </nav>

                            <div class="row">

                                <div class="col-md-12">

                                    <div class="content-box-large">

                                        <div class="panel-heading">
                                            <div class="panel-title">
                                                <h2>Posts</h2>
                                            </div>

                                        </div>

                                        <div class="panel-body">

                                            @if(Session::has('message'))
                                            <div class="alert alert-primary" role="alert">
                                                {{ Session::get('message') }}
                                            </div>
                                            @endif


                                            <a href="{{ route('admin/posts/crear') }}" class="btn btn-success mt-4 ml-3"> Agregar
                                            </a>

                                            <section class="example mt-4">

                                                <div class="table-responsive">

                                                    <table class="table table-striped table-dark table-bordered table-hover">
                                                        <thead>
                                                            <tr>
                                                                <th>Id</th>
                                                                <th>Usuario</th>
                                                                <th>Descripcion</th>
                                                                <th>Imagen</th>
                                                                <th>Acciones</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @foreach($posts as $post)
                                                            <tr>
                                                                <td class="v-align-middle">{{$post->id}}</td>
                                                                <td class="v-align-middle">{{$post->user["userName"]}}</td>
                                                                <td class="v-align-middle">{{$post->description}}</td>

                                                                <td class="v-align-middle">

                                                                    <img src="../../../storage/avatar/{{ $post->image }}" width="50" class="img-responsive">



                                                                </td>
                                                                <td class="v-align-middle">

                                                                    <form action="{{ route('admin/posts/eliminar',$post->id) }}" method="POST" class="form-horizontal" role="form" onsubmit="return confirmarEliminar()">

                                                                        <input type="hidden" name="_method" value="PUT">
                                                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                                        <a href="{{ route('admin/posts/actualizar',$post->id) }}" class="btn btn-primary">Editar</a>

                                                                        <button type="submit" class="btn btn-danger">Eliminar</button>

                                                                    </form>

                                                                </td>
                                                            </tr>
                                                            @endforeach
                                                        </tbody>
                                                    </table>

                                                </div>
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

        <script type="text/javascript">
            function confirmarEliminar() {
                var x = confirm("Estas seguro de Eliminar?");
                if (x)
                    return true;
                else
                    return false;
            }
        </script>

</body>

</html>
