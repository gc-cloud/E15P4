<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class CommentController extends Controller
{
    /**
     * Add comments to  the database.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     public function store(Request $request)
     {
        /* Instantiate a new comment. Set parameters to match
         the request. Save the comment in the
        database and go back to the source article */
        $comment = new \App\Comment;
        $comment->comment = $request->comment;
        $comment->article_id = $request->article_id;
        $comment->user_id = $request->user_id;
        $comment->save();
        return back();
     }
}
