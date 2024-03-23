<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    // Greate new post
    function create()
    {
        $data = ['title'=>'Create Post','content'=>'Hollow injected content'];
        return view('create-post',compact('data'));
    }

    // Process the create post request
    function store(Request $req)
    {
        //handle the request and return view
    }
}
