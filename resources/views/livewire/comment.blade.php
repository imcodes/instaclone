<div>
    {{--$Commenter->id--}}
    @if($commentCount > 0)
     {{-- <button onclick="Livewire.emit('openModal', 'comment-modal')">view all {{count($Comments)}} comments</button> --}}
     {{-- <button wire:click="$emit('openModal', 'comment-modal')">view all {{count($Comments)}} comments</button>  --}}
    {{-- <button wire:click="$toggle('showingComments')">view all {{count($Comments)}} comments</button> --}}
        <button wire:click="showCommentModal">view all {{$commentCount}} comments</button>           
    @endif
    
    <form wire:submit = "postComment">
        <input type="hidden" wire:model="post_id">
        <div class="comment-input-wrapper w-full border-b border-gray-200 flex justify-center items-center">
            <textarea class="comment-input" wire:model = 'content' wire:keydown.enter='postComment' placeholder='Add a comment...' ></textarea>
            <span><x-svg name="emoji-face" title="Emoji"/></span>
        </div>
    </form>
    @if($showCommentDialog) 
     <livewire:comment-modal post_id="{{$post_id}}" :mediaExtensions="$mediaExtensions"/>
    @endif
</div>



