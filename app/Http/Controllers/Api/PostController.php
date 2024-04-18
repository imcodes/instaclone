<?php

namespace App\Http\Controllers\Api;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($limit = 10)
    {
        $post = Post::with('user')->limit($limit)->get();
        $data = [
            'postCount' => $post->count(),
            'posts' => $post
        ];
        return response($data);
    }

    /**
     * Display a Listing of resources with the comments and Enagagments
     */
    public function indexWithComments($limit = 10){
        $post = Post::with(['user','comments'])->limit($limit)->get();
        return response($post);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'post-title' => 'required|max:60',
            'post-description' => 'nullable|max:250',
            'media' => 'required'
        ]);

        $data = [
            'caption' => $request->input('post-title'),
            'description' => $request->input('post-description'),
            'media' => $request->input('media'),
            'user_id' => $request->input('user_id')
        ];

        $post = new Post();
         $create = $post->create($data);
         if($create){
            return response($create,201);
         }else{
            return response(['error'=>'Sorry Unable to save post'],501);
         }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::findOrFail($id);
        return response($post);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
