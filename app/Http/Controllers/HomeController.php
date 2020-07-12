<?php

namespace App\Http\Controllers;

use Auth;
use App\Forum;
use App\Tag;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $forum= Forum::all();
        $tag = Tag::all();
        return view('home',compact('forum','tag'));
    }

    public function logout(Request $request) {
        Auth::logout();
        return redirect('/');
    }

}
