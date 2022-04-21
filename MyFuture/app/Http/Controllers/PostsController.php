<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Post;
use App\User;



class PostsController extends Controller
{

    public function all() {

        $posts = Post::orderBy('created_at', 'desc')->take(10)->get();


        return view("posts", compact('posts'));
    }



    public function detail($id)
    {
        $post = Post::find($id);
        $user = User::find($id);

        return view("/post", compact('post', 'user'));
    }



    public function add () {
        $posts = Post::all();




        return view("addPost", compact("posts"));

    }




    public function store (Request $req) {
        $rules = [
            "image" => "required|image",
            "description" => "string",
            "user_id" => "integer"

        ];

        $this->validate($req, $rules);



        $post = New Post();

        $post->image = $req->file('image')->store('/');

        $post->description = $req->description;
        $post->user_id = $req->user()->id;




        $post->save();


        return redirect("/post/" . $post->id);
    }


    public function delete(Request $req) {
        $idPost = $req["id"];

        $post = Post::find($idPost);

        $post->delete();

        return redirect("/posts");
    }
}
