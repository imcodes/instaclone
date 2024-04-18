<?php

namespace App\Http\Livewire;

use App\Models\Post;
use App\Models\Comment as PostComment;
use App\Models\User;
use Livewire\Component;
//use LivewireUI\Modal\ModalComponent;

class CommentModal extends Component
{

    public $mediaExtensions;
    public $postMedia;
    public $content; //form comment input
    // public $comment_user = auth()->user()->id;
    public $post_id;
    public $reply_to;
    public $user;

    public $dnone = true;

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

    public function mount($post_id = null, $user = null)
    {
        $this->post_id = $post_id;
        $this->user = (is_null($user)) ? auth()->user() : $user;

        //get post media
        $media = Post::where('id', $this->post_id)->value('media');
        $media_type = pathinfo($media,PATHINFO_EXTENSION);
        $this->postMedia = [
            'filename' => $media,
            'type' => "$media_type"
        ];

    }

    //get user method
    public function getUser($user_id){
        return User::where('id',$user_id)->first();
    }
    public function getComments(){
        $Post = Post::find($this->post_id);
        $Comment = PostComment::whereBelongsTo($Post,'post')
            ->where('reply_to',null)
            ->with(['replies','user','post'])->get();// with('user')->where('id',$this->post_id);
        $comments =  (!$Comment) ? [] : $Comment;
return $comments;
    }

    public function hideModal(){
        $this->emit('hideModal');
    }

    public function render()
    {
        return view('livewire.comment-modal')->with([
            'comments' => $this->getComments(),
            'Media' => $this->postMedia

        ]);
    }
    public function toggleReplyViews(){
        if($this->dnone == false){
             $this->dnone = true;
        }else{
             $this->dnone = false;
        }
    }
}
