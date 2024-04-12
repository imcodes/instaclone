<div>
    {{--$Commenter->id--}}
    @if(count($Comments) > 0)
     {{-- <button onclick="Livewire.emit('openModal', 'comment-modal')">view all {{count($Comments)}} comments</button> --}}
     {{-- <button wire:click="$emit('openModal', 'comment-modal')">view all {{count($Comments)}} comments</button>  --}}
    {{-- <button wire:click="$toggle('showingComments')">view all {{count($Comments)}} comments</button> --}}
        <button wire:click="showCommentModal">view all {{count($Comments)}} comments</button>           
    @endif
    
    <form wire:submit = "postComment">
        <input type="hidden" wire:model="post_id">
        <div class="comment-input-wrapper w-full border-b border-gray-200 flex justify-center items-center">
            <textarea class="comment-input" wire:model = 'content' wire:keydown.enter='postComment' placeholder='Add a comment...' ></textarea>
            <span><x-svg name="emoji-face" title="Emoji"/></span>
        </div>
    </form>
    @if($showCommentDialog) 
     <livewire:comment-modal />
    @endif
</div>

{{-- @if($showCommentDialog)
    @livewire('comment-modal', ['post_id' => $post_id, ], key($user->id))
    <livewire:comment-modal :post_id = "$post_id" :user = "$user()" :wire:key="$post_id" />
    <livewire:comment-modal />
@endif --}}




