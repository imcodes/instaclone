<?php

namespace App\Http\Livewire;

use App\Models\Post;
use App\Models\Comment as PostComment;
use Livewire\Component;
use Laravel\Jetstream\InteractsWithBanner;

class Comment extends Component
{
    use InteractsWithBanner;
    protected $listeners = ['hideModal' => 'hideCommentModal'];
    public $content; //form comment input
    // public $comment_user = auth()->user()->id;
    public $post_id;
    public $reply_to;
    public $user_id;


    public $showCommentDialog = false;

    public $mediaExtensions;

    public function postComment(){
        // $this->validate();
        PostComment::create(
            $this->only([
            'content',
            'user_id',
            'post_id',
            'reply_to'
            ])
        );

    $this->content = null; //clear the comment 
    $this->banner('Comment Posted.');
    // return redirect(route('feed'));


    }

    public function mount($post_id = null)
    {
        $this->post_id = $post_id;
        $this->user_id = auth()->user()->id;
       
    }

    public function showCommentModal(){
        // $this->emit('showCommentModal');
        $this->showCommentDialog = true;
    }

    public function hideCommentModal(){
        $this->showCommentDialog = false;
    }

    public function getPostMedia(){
        $media = Post::find($this->post_id)->value('media');
        $media_type = pathinfo($media,PATHINFO_EXTENSION);
        return [
            'filename' => $media,
            'type' => "$media_type"
        ];
    }

    public function getCommentCount(){
        $Post = Post::find($this->post_id);
        $count = PostComment::whereBelongsTo($Post,'post')->count();
        // $comments =  (!$Comment) ? [] : $Comment;
        return $count;
    }

   

    public function render()
    {
        return view('livewire.comment')->with([
            'Commenter'=>auth()->user(),
            'commentCount' => $this->getCommentCount(),
            'media' => $this->getPostMedia(),
        ]);
    }
}
