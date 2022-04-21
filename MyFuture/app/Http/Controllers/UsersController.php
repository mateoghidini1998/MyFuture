<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;

class UsersController extends Controller
{
    public function all() {

        $users = User::paginate(10);

        return view("/users", compact("users"));

    }

    public function detail($id) {
        $user = User::find($id);

        return view("/user", compact("user"));
    }

       public function search(Request $req) {
        $search = $req["search"];

        $users = User::where("name", "like", "%" . $search . "%")->get();

        return view("search", compact("users", "search"));

    }


    public function profile() {
        return view('profile', array('user' => Auth::user()));
    }
}
