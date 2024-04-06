<div class="flex flex-col justify-between min-h-full w-60 py-12">
    <div class="flex flex-col justify-around h-2/3">

        <div class="menu pl-3 ml-2">
        <a href="{{route('feed')}}" class="hidden lg:block gap-4"><x-svg name='instagram-text' dimension="w-24 h-auto" title="Instagram"/></a>
        <a href="{{route('feed')}}" class="lg:hidden gap-4"><x-svg name='instagram-icon' title="Instagram"/></a>
        </div>
        
        <ul class="menu min-h-80  text-base-content">
            <li class="mt-3"><a href="{{route('feed')}}" class="flex gap-4"><x-svg name='home'/> <span>Home</span></a></li>
            <li class="mt-3"><a href="#" class="flex gap-4"><x-svg name='search'/> <span>Search</span></a></li>
            <li class="mt-3"><a href="#" class="flex gap-4"><x-svg name='compass'/> <span>Explore</span></a></li>
            <li class="mt-3"><a href="#" class="flex gap-4"><x-svg name='reel'/> <span>Reels</span></a></li>
            <li class="mt-3"><a href="#" class="flex gap-4"><x-svg name='chat'/> <span>Messages</span></a></li>
            <li class="mt-3"><a href="#" class="flex gap-4"><x-svg name='heart'/> <span>Notifications</span></a></li>
            <li class="mt-3"><a href="{{route('create.feed')}}" class="flex gap-4"><x-svg name='add'/> <span>Create</span></a></li>
            <li class="mt-3"><a href="#" class="flex gap-4"><x-avater src="" styles="w-6 h-6"/> <span>Profile</span></a></li>
        </ul>
    </div>
    
    <ul class="menu  text-base-content">
        <li class="my-2"><a href="#" class="flex gap-4"><x-svg name='thread'/> <span>Threads</span></a></li>
        <li class="my-2"><a href="#" class="flex gap-4"><x-svg name='menu' title="Settings"/> <span>More</span></a></li>
    </ul>
</div>
