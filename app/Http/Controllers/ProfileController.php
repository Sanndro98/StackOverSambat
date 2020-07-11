<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;
use App\Forum;
use App\Tag;
class ProfileController extends Controller
{
    public function index(User $user)
    {
    	$tag = Tag::all();
    	$forum = Forum::where('user_id',$user->id)->get();
    	return view('home',compact('user','forum','tag'));
    }
}
