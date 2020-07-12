<?php

namespace App\Http\Controllers;

use App\Forum;
use App\Tag;
use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Str;


class ForumController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $forum = Forum::all();
        return view('forum.index',compact('forum'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tags= Tag::all();
        return view('forum.create',compact('tags'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'title' => 'required',
            'tags' => 'required',
            'descriptio' => 'required'
        ]);
        $forum = New Forum;
        $forum->user_id = Auth::user()->id;
        $forum->title = $request->title;
        $forum->slug = Str::slug($request->title);
        $forum->description = $request->descriptio;
        $forum->save();
        $forum->tags()->sync($request->tags);
        return redirect()->route('forum.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\forum  $forum
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $forum=Forum::find($id);
        return view('forum.show',compact('forum'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\forum  $forum
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $forum= Forum::find($id);
        $tags= Tag::all();
        return view('forum.edit',compact('forum','tags'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\forum  $forum
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'title' => 'required',
            'tags' => 'required',
            'descriptio' => 'required'
        ]);
        $forum= Forum::find($id);
        $forum->user_id = Auth::user()->id;
        $forum->title = $request->title;
        $forum->slug = Str::slug($request->title);
        $forum->description = $request->descriptio;
        $forum->save();
        $forum->tags()->sync($request->tags);

        return redirect()->route('forum.index');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\forum  $forum
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $forum = Forum::find($id);
        $forum->tags()->detach();
        $forum->delete();
        return redirect()->route('forum.index');
    }

    public function about()
    {
        return view('about');
    }
}
