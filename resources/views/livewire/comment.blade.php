<div>
    {{--$Commenter->id--}}
    @if(count($Comments) > 0)
    <a href="#">view all {{count($Comments)}} comments</a>
    @endif

    <form wire:submit = "postComment">
        <input type="hidden" wire:model="post_id">
        <div class="comment-input-wrapper w-full border-b border-gray-200 flex justify-center items-center">
            <textarea class="comment-input" wire:model = 'content' wire:keydown.enter='postComment' placeholder='Add a comment...' ></textarea>
            <span><x-svg name="emoji-face" title="Emoji"/></span>
        </div>
    </form>
    
</div>
