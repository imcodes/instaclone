<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class PostController extends Controller
{
    // Greate new post
    function create()
    {
        //  session()->remove('file');
        $data = ['title'=>'Create Post','content'=>'Hollow injected content'];
        return view('create-post',compact('data'));
    }

    // Accept the Media file and store in session for the next validation
    function uploadMedia(Request $req)
    {
                
        if($req->hasFile('post-media') && !session()->has('file')){

            // session()->put('file',$req->file());

            //dd(auth()->user());

            $file = $req->file('post-media');

            $targetPath = 'feed/';
            $filename = md5($file->getFilename()).'_'.time().'.'.$file->getClientOriginalExtension();
            
            $upload = $file->storeAs("public/$targetPath",$filename);

            if($upload){
                session()->put('file',$filename);
                return redirect(route('create.feed')) ;
            }

            return Redirect::back()->with('error','Oops! We have trouble uploading your media');



        }

        return $this->validateCreate($req);

    }
    
    // Validate and publish the post
    public function validateCreate(Request $request){
        //
        // session()->remove('file');
        $request->validate([
            'post-title' => 'required|max:60',
            'post-description' => 'nullable|max:250',
            'media' => 'required'
        ]);

        $data = [
            'caption' => $request->input('post-title'),
            'description' => $request->input('post-description'),
            'media' => $request->input('media'),
            'user_id' => auth()->user()->id
        ];

        $post = new Post();
         $create = $post->create($data);
         if($create){
            session()->remove('file');
            return redirect(route('feed'))->with('success','Post Created Successfully');
         }else{
            return redirect()->back()->with('error','Something went wrong');
         }
    }

    public function showFeeds(){
        $Posts = Post::with('user')->get();
        // $User = User::with('posts')->where('id',1)->first();
        return view('livewire.user.feed',compact('Posts'));
    }
}
