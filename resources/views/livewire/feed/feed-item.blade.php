<div class="feed-item mb-6 w-full">

        <div class="feed-item-head flex py-4 items-center">
            <x-avater src="{{asset('/imgs/favicon.png')}}" styles='w-9 h-9'></x-avater>
            <div class="ml-2">
                <strong class="feed-item-username">{{explode(' ',$post->user->name)[0]}}</strong>
                <span title="{{$post->created_at->format('M d, Y')}}">{{$post->created_at->diffForHumans()}}</span>
            </div>
        </div>

        <div class="feed-item-media-wrapper">
            @php
            $media_type = pathinfo($post->media,PATHINFO_EXTENSION);
            $img_exts = ['jpg','jpeg','gif','webp','pnh'];
            $video_exts = ['mp4'];
            @endphp
            
            @if(in_array($media_type, $img_exts))
                <img src="{{asset('/storage/feed/'.$post->media)}}" alt="{{$post->caption}}">
            @elseif(in_array($media_type, $video_exts))
                <video controls src="{{asset('/storage/feed/'.$post->media)}}"></video>
            @endif
        </div>

        <div class="feed-item-engage-wrapper flex justify-between py-2">
            <div class='flex flex-grow-2 gap-2'>
                <a href="#" class="mr-2"><x-svg name="heart" title="Like" /></a>
                <a href="#" class="mr-2"><x-svg name="comment" title="Comment" /></a>
                <a href="#" class="mr-2"><x-svg name="send" title="Share" /></a>
            </div>
            <div>
                <a href="#"><x-svg name="bookmark"/></a>
            </div>

        </div>

        <!-- Description -->
        <div class="feed-item-description">
            <strong class="feed-item-username">{{explode(' ',$post->user->name)[0]}}</strong>
            <p class="inline text-sm">{{$post->description}}</p>
        </div>

        <!-- Comments section -->
        <div class="feed-item-comment-box">
            
            <livewire:comment post_id="{{$post->id}}" />
        </div>

</div>
