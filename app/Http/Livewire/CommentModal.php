<?php

namespace App\Http\Livewire;

use App\Models\Post;
use App\Models\Comment as PostComment;
use Livewire\Component;
use LivewireUI\Modal\ModalComponent;

class CommentModal extends ModalComponent
{

    public $mediaExtensions;
    public $content; //form comment input
    // public $comment_user = auth()->user()->id;
    public $post_id;
    public $reply_to;
    public $user_id;

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
    public function getComments(){
        $Post = Post::find($this->post_id);
        $Comment = PostComment::whereBelongsTo($Post,'post')->get();// with('user')->where('id',$this->post_id);
        $comments =  (!$Comment) ? [] : $Comment;
        return $comments;
    }

    public function hideModal(){
        $this->emit('hideModal');
    }

    public function render()
    {
        return view('livewire.comment-modal');
    }
}
