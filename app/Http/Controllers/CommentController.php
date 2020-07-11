<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Forum;
use App\Comment;
use Auth;
class CommentController extends Controller
{
    public function addComment(Request $request,forum $forum)
    {
    	$this->validate($request,[
    		'conten'=>'required'
    	]);
    	$comment= New Comment;
    	$comment->user_id = Auth::user()->id;
    	$comment->content = $request->conten;

    	$forum->comments()->save($comment);

    	return back();
    }
    public function replyComment(Request $request,Comment $comment)
    {
        $this->validate($request,[
            'conten2'=>'required'
        ]);
        $reply= New Comment;
        $reply->user_id = Auth::user()->id;
        $reply->content = $request->conten2;

        $comment->comments()->save($reply);

        return back();
    }
}
