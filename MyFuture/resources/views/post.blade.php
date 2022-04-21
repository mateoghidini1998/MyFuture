@extends('layout')
@extends('layouts.app')

@section("title")
Posts
@endsection

@section("main")

<style>
    .user-Image-Profile {
        display: block;
        width: 50px;
    }
</style>

<main>

    <div class="arrowBack">

        <a href="/posts"> <i class="fa fa-arrow-left arrowFont"></i> </a>
    </div>

    <div style="margin-top:0px" class="postContainer postDetailContainer">


        <div class="photoProfileContainer">
            <img class="profilePicture" src="../../../storage/avatar/{{ $post->user['avatar'] }}" alt="profile">

            <div class="userName">
                <h2>{{$post->user['userName']}}</h2>
                <p>{{ $post->created_at->diffForHumans() }}</p>
            </div>

        </div>

        <div class="postImage">
            <img src="../../../storage/avatar/{{ $post->image }}" alt="postFoto">
        </div>
        <hr>
        <div class="details-Comments">
            <div class="photoProfileContainer">
                <img class="profilePicture" src="../../../storage/avatar/{{ $post->user['avatar'] }}" alt="profile">



                <div class="details-Nick">
                    <h2>{{$post->user['userName'] }}</h2>
                    <hr>
                    <div class="Est">
                        <p>{{$post->description}}</p>
                    </div>


                </div>

            </div>

        </div>

        <hr>






        <section>




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

            <div style="width: 100%;display: block" id="myDiv">
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


        </section>

    </div>

</main>



@if (Auth::check() && Auth::user()->isAdmin())
<form class="" action="/posts/delete" method="post">
    @csrf

    <input type="hidden" name="id" value="{{$post->id}}">
    <button type="submit" name="button" class="btn btn-danger">Delete Post</button>
</form>
@endif

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
</script>

@endsection
