<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comments;
use App\PostComments;

class CommentsController extends Controller
{
    public function store_comment(Request $request)
    {
        Comments::create([
            "name"=>$request->input("Name"),
            "email"=>$request->input("Email"),
            "comment"=>$request->input("Comment")
        ]);
        return redirect()->back();
    }

    public function store_post_comment(Request $request)
    {
    	PostComments::create([
    		"post_id"=>$request->input("post_id"),
    		"author"=>$request->input("author"),
        	"text"=>$request->input("text"),
    	]);
    	return redirect()->back();
    }
}
