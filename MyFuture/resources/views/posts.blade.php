@extends('layout')
@extends('layouts.app')


@section("title")
Posts
@endsection

@section("main")


<ul style="list-style-type: none">
    @forelse($posts as $key => $post)

    <div class="postContainer">


        <div class="photoProfileContainer">
            <img class="profilePicture" src="../../../storage/avatar/{{$post->user['avatar'] }}">


            <div class="userName">


                <h2>
                    <a style="color: black; font-size: 15px" href="/user/{{$post->user->id}}">{{$post->user["userName"]}}
                    </a>
                </h2>
                <p>{{ $post->created_at->diffForHumans() }}</p>
            </div>

        </div>

        <div class="postImage">


            <img class="photoContainer" src="../../../storage/avatar/{{$post['image'] }} ">

        </div>

        <div class="description">
            <p style="font-size: 30px">
                {{$post->description}}

                <span>
                    <a href="/post/{{$post->id}}">
                        <i style="font-size:30px" class="fa fa-plus"></i>

                    </a>
                </span>
            </p>
        </div>


        <div class="postIcons">

            <div class="postIcons-heart">
                <button class="buttons" type="button" onclick="increaseValue()" id="like" name="button">
                    <i class="fa fa-thumbs-up">
                        <span id="clicks">0</span>
                    </i>
                </button>


            </div>


            <div class="postIcons-comment">

                <button class="buttons" type="button" onclick="showHideComments()" name="button"><i class="fa fa-comment"> 12</i></button>

            </div>
            <button style="width: 50%" class="buttons" type="button" onclick="increaseValueDislike()" id="dislike" name="button">
                <i class="fa fa-thumbs-down">
                    <span id="clicks">0</span>
                </i>
            </button>



        </div>

        <div style="display:none ;width: 100%; transition: width 2s, height 4s;transition-delay: 1s;" id="myDiv">
            <div class="user-Details-Container">

                <div class="user-Image-Profile">
                    <img class="user-Image-Profile" src="../../../storage/avatar/img_avatar.png" alt="profile">
                </div>

                <div class="comments-Container">
                    <h2 class="user-Name">Franky Style</h2>
                    <p class="users-Comments">WOW!</p>
                </div>

            </div>

            <div class="user-Details-Container">

                <div class="user-Image-Profile">
                    <img class="user-Image-Profile" src="../../../storage/avatar/img_avatar.png" alt="profile">
                </div>

                <div class="comments-Container">
                    <h2 class="user-Name">Homer el mero mero</h2>
                    <p class="users-Comments">AMAZING!</p>
                </div>

            </div>

            <div class="user-Details-Container">

                <div class="user-Image-Profile">
                    <img class="user-Image-Profile" src="../../../storage/avatar/img_avatar.png" alt="profile">
                </div>

                <div class="comments-Container">
                    <h2 class="user-Name">C.R.O</h2>
                    <p class="users-Comments">DELUXE!</p>
                </div>

            </div>
        </div>





    </div>


    @empty
    <p>
        There are no posts
    </p>

    <p>
        Try later....
    </p>

    @endforelse
</ul>



<script type="text/javascript">
    var clicks = 0;

    function increaseValue() {
        clicks += 1;
        document.getElementById('like').innerHTML = clicks;
    };

    function increaseValueDislike() {
        clicks += 1;
        document.getElementById('dislike').innerHTML = clicks;
    }



    function showHideComments() {
        var x = document.getElementById("myDiv");
        if (x.style.display === "none") {
            x.style.display = "block";
        } else {
            x.style.display = "none";
        }
    }

    function toggleComments() {
        var btn = document.querySelector('button');
        var hint = document.getElementById('hint');
        var height = hint.clientHeight;
        var width = hint.clientWidth;
        console.log(width + 'x' + height);
        // initialize them (within hint.style)
        hint.style.height = height + 'px';
        hint.style.width = width + 'px';

        btn.addEventListener('click', function() {
            if (hint.style.visibility == 'hidden') {
                hint.style.visibility = 'visible';
                //hint.style.opacity = '1';
                hint.style.height = height + 'px';
                hint.style.width = width + 'px';
                hint.style.padding = '.5em';
            } else {
                hint.style.visibility = 'hidden';
                //hint.style.opacity = '0';
                hint.style.height = '0';
                hint.style.width = '0';
                hint.style.padding = '0';
            }

        });
    }
</script>


@endsection
