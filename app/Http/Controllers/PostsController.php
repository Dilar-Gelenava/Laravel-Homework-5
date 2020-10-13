<?php

namespace App\Http\Controllers;

use App\Posts;
use App\PostComments;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store_post(Request $request)
    {
        Posts::create([
            "author"=>$request->input("Author"),
            "text"=>$request->input("Text")
        ]);
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Posts  $posts
     * @return \Illuminate\Http\Response
     */
    public function show_post($id)
    {
        $post=Posts::where("id",$id)->firstOrFail();
        $comments=PostComments::where("post_id",$id)->get();
        return view("view",[
            "post"=>$post,
            "comments"=>$comments
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Posts  $posts
     * @return \Illuminate\Http\Response
     */
    public function edit_post($id)
    {
        $post=Posts::where("id",$id)->firstOrFail();
        return view("edit",["post"=>$post]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Posts  $posts
     * @return \Illuminate\Http\Response
     */
    public function update_post(Request $request)
    {
        Posts::where("id",$request->input("id"))->update([
            "author"=>$request->input("author"),
            "text"=>$request->input("text")
        ]);
        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Posts  $posts
     * @return \Illuminate\Http\Response
     */
    public function delete_post(Request $request)
    {
        Posts::where("id", $request->input("id"))->delete();
        return redirect()->back();
    }
}
