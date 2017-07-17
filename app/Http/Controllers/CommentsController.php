<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;

class CommentsController extends Controller
{
    function saveNewComment(Request $request, $id) {
    	$new_comment = new Comment();
    	$new_comment->comment = $request->comment; 
    	$new_comment->blog_id = $id;
    	$new_comment->save();

    	return back();
    }
}
