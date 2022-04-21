@extends('layout')
@extends('layouts.app')

@section("title")
User: {{$user->name}}
@endsection

@section("main")



@if (Auth::check() && Auth::user()->isAdmin())

<div class="bpaContainer">
    <!-- ButtonProfileContainer -->
    <button class="btn btn-danger">
        <a style="color: Black" href="{{ route('admin/dashboard') }}">Administrador</a>
    </button>
</div>

@if ($user->avatar != null)
<div class="paUser">
    <img style="display:block; margin: 0 auto; border-radius: 50%; margin-bottom: 20px; width: 50%;" src="../../../storage/avatar/{{ $user->avatar }}" alt="">
</div>
@else
<div class="paUser">
    <img style="display:block; margin: 0 auto; border-radius: 50%; margin-bottom: 20px; width: 50%;" src="../../../storage/avatar/img_avatar.png" alt="">
</div>
@endif


@endif

<ul style="list-style-type:none; background-color: lightgrey; width: 100%; margin: 0 auto; border-radius: 15px; font-size: 30px">



    <li style="font-family: 'Cinzel Decorative', cursive">
        <strong>Nombre: </strong> {{$user->name}}
        <br>
        <strong>Apellido: </strong> {{$user->lastName}}
        <br>
        <strong>Creado: {{ $user->created_at->toFormattedDateString() }}</strong>
        <br>
        <strong>Nickname: </strong> {{$user->userName}}
        <br>
        <strong>Email: </strong> {{$user->email}}
        <br>
        <strong>Fecha de Nacimiento:</strong> {{$user->birthday}}
        <br>
        <strong>Cantidad De Posteos:</strong> {{ count($user->posts) }}
        <br>
        <strong>Seguidores: </strong> {{count($user->followers)}}

        @forelse ($user->followers as $key => $usersFollowed)
        <img style="display: block; width:200px; border-radius: 10px" src="../../../storage/avatar/{{ $usersFollowed['avatar'] }}" alt="">
        <a href=" {{ route('views/user', $usersFollowed['id']) }}">{{$usersFollowed['name']}}</a>
        @endforeach

        <br>
        <strong>Siguiendo:</strong> {{count($user->followings)}}

        @forelse ($user->followings as $key => $usersFollowings)
        <img style="display: block; width:200px; border-radius: 10px" src="../../../storage/avatar/{{ $usersFollowings['avatar'] }}" alt="">
        <a href=" {{ route('views/user', $usersFollowings['id']) }}">{{$usersFollowings['name']}}</a>
        @endforeach

        <br>
        @if (Auth::user()->followers && count($user->followers) == 0)
        <button class="btn btn-info">
            <a href="{{ route('user.follow', $user->id) }}">Seguir usuario</a>
        </button>
        @else
        <button class="btn btn-warning">
            <a href="{{ route('user.unfollow', $user->id) }}">Dejar de seguir usuario</a>
        </button>
        @endif
    </li>


</ul>




<div class="addPostContainer">
    <a href=" {{ route('posts/add')}} "><i class="fa fa-plus">Add Post</i></a>
</div>

<main class="profileUserContainer">



    <div class="mobileAddPostContainer">
        <a href=" {{ route('posts/add')}} "><i class="fa fa-plus">Add Post </i></a>
    </div>



    <div class="postContainerProfile">


        @forelse ($user->posts as $key => $post)
        <div class="postImageProfile">

            <div class="single-img">


                <img src="../../../storage/avatar/{{ $post->image }}">

                <h2 style="font-weight:bold">
                    {{$post['description']}}
                </h2>


                <div class="img-overlay">

                    <div class="buttonsContainer">

                        <div style="margin: 0 auto; height: auto;" class="">
                            <a href=" {{ route('post/detail', $post->id) }} ">
                                <i style="font-size: 100px; color: white" class="fa fa-plus"></i>
                            </a>

                        </div>


                    </div>

                </div>
            </div>

        </div>

        <hr style="border: 1px solid red">
        @endforeach














    </div>
    </div>










    @endsection
