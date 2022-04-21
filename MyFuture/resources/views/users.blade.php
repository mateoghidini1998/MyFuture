@extends('layout')
@extends('layouts.app')

@section("title")
Users
@endsection

@section("main")

<ul style="list-style-type: none">
    @forelse($users as $user)

    <li>
        @if ($user['avatar'] != null)
        <img style="width: 300px; margin-bottom: 10px; border-radius: 50px" class="profilePicture" src="../../../storage/avatar/{{ $user['avatar'] }}">
        @else
        <img style="width: 300px; margin-bottom: 10px; border-radius: 50%" class="profilePicture" src="../../../storage/avatar/img_avatar.png">
        @endif
        <a style="color: black" href="/user/{{$user->id}}">
            {{$user->userName}}
        </a>
    </li>

    @empty
    <p>
        There are no user
    </p>

    <p>
        Try later....
    </p>

    @endforelse
</ul>

{{$users->links()}}

<br>

@endsection
