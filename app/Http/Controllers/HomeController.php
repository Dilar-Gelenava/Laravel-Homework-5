<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comments;
use App\Posts;

class HomeController extends Controller
{
    public function index()
    {
    	$comments = Comments::all();
    	$posts = Posts::all();
    	return view("single", [
    		'comments' => $comments,
    		'posts' => $posts,
    	]);
    }
}
