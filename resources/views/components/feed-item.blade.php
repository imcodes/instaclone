@props(["post"])


<ul class="mb-6 w-full">
    <li>
        <div class="feed-item-head flex py-4 items-center">
            <x-avater src="{{asset('/imgs/favicon.png')}}" styles='w-9 h-9'></x-avater>
            <div class="ml-2 feed-item-username">
                {{$post->caption}}
                <span title="April 4, 2024">1d</span>
            </div>
        </div>

        <div class="feed-item-media-wrapper">
            <img src="{{asset('/storage/feed/a96dcf7c00667912dbb91d90a7c40957_1711728972.jpg')}}" alt="">
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
    </li>
</ul>