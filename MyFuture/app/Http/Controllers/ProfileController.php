<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class ProfileController extends Controller{

    /**
     * Follow the user.
     *
     * @param $profileId
     *
     */
    public function followUser(int $profileId)
    {
        $user = User::find($profileId);
        if (!$user) {

            return redirect()->back()->with('error', 'El usuario no existe');
        }

        $user->followers()->attach(auth()->user()->id);
        return redirect()->back()->with('success', 'Se dejo de seguir al usuario');
    }


    /**
     * Follow the user.
     *
     * @param $profileId
     *
     */
    public function unFollowUser(int $profileId)
    {
        $user = User::find($profileId);
        if (!$user) {

            return redirect()->back()->with('error', 'El usuario no existe');
        }
        $user->followers()->detach(auth()->user()->id);
        return redirect()->back()->with('success', 'Se dejo de seguir al usuario');
    }



    /**
 * Show the user details page.
 * @param int $userId
 *
 */
public function show(int $userId)
{
    $user = User::find($userId);
    $followers = $user->followers;
    $followings = $user->followings;
    return view('user', compact('user', 'followers' , 'followings'));
}


}
