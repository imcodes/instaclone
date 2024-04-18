

<div class="comment-modal-wrapper" >
    <div class="close-overlay" wire:click = 'hideModal'></div>

    <div class="action-bar"><button class="close-btn" wire:click = 'hideModal'> <x-svg name="close" /> </button></div>

    <div class="modal-container">
        {{-- media section --}}
        <aside class="media-side">
            @if(in_array(strtolower($postMedia['type']), $this->mediaExtensions['image']))
                <img src="{{asset('/storage/feed/'.$postMedia['filename'])}}" alt="{{$postMedia['filename']}}">
            @elseif(in_array(strtolower($postMedia['type']), $this->mediaExtensions['video']))
                <video controls src="{{asset('/storage/feed/'.$postMedia['filename'])}}"></video>
            @endif
        </aside>

        {{-- comments section --}}
        <aside class="comment-side">
            <div class="poster flex justify-between items-center">
                <div class="user-info">
                    <div class="flex items-center">
                        <x-avater src="https://source.unsplash.com/random/500x500/?face" styles='w-9 h-9 rounded-full mr-2'></x-avater>
                        <strong>{{ \Str::snake( $user->name ) }} <x-svg name="verified" styles="text-blue-500 inline" /></strong>
                    </div>
                    <p class="text-sm">Original sound</p>


                </div>
                <a href="#" class="menu">...</a>
            </div>

            <ul class="comment-list-wrapper">
                @foreach($comments as $Comment)
                <li class="comment-item ">
                    <x-avater src="https://source.unsplash.com/random/500x500/?face-{{$Comment->id}}" styles='w-9 h-9 rounded-full mr-2'></x-avater>
                    <div class="comment-detail">
                        <div class="comment-content">
                            <strong>{{ \Str::snake( $Comment->user->name ) }} <x-svg name="verified" styles="text-blue-500 inline" /></strong>
                            <span>{{$Comment->content}}</span>
                        </div>
                        <div class="comment-meta text-sm flex gap-1">
                            <span>{{$Comment->created_at->diffForHumans()}}</span>
                            <span>reply to</span>
                        </div>
                        @if(count($Comment->replies) > 0)
                        <span wire:click="toggleReplyViews" class="reply-toggler"> --view {{count($Comment->replies)}} {{\Str::plural("reply",count($Comment->replies))}} -- </span>
                        {{-- REPLIES --}}
                        @endif
                    </div>
                    @if(count($Comment->replies) > 0)
                        <ul class="comment-reply-wrapper @if($dnone == true) d-none @endif">
                            @foreach($Comment->replies as $Reply)
                                <li class="comment-item ">
                                    <x-avater src="https://source.unsplash.com/random/500x500/?face" styles='w-9 h-9 rounded-full mr-2'></x-avater>
                                    <div class="comment-detail">
                                        <div class="comment-content">
                                            <strong>{{ \Str::snake( $this->getUser($Reply->user_id )->name) }} <x-svg name="verified" styles="text-blue-500 inline" /></strong>
                                            <span>{{$Reply->content}}</span>
                                        </div>
                                        <div class="comment-meta text-sm flex gap-1">
                                            <span>{{$Reply->created_at->diffForHumans()}}</span>
                                            <span>reply to</span>
                                        </div>
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                    @endif

                </li>
                @endforeach

            </ul>
        </aside>
    </div>
</div>
