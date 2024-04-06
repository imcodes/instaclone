@php
use App\Http\Livewire\Feed\FeedItem;
@endphp
<x-feed-layout class="">
    <label for="my-drawer-2" class="btn btn-primary drawer-button lg:hidden">Open drawer</label>
       <div class="px-20 py-12" style="display:flex;">
            <!-- feed section -->
            <div class="flex flex-col items-center justify-center border-base-300 w-2/3  relative">
                <x-story-slide class="story-slider no-scrollbar scroll-snap-x w-full mb-4 " style=""/>

                <!-- FEED LOOPS -->
               <div class="lg:w-2/3">
                    @foreach($Posts as $Post)
                    <!-- <x-feed-item post= key="{$Post->id}}"/> -->
                    @livewire(FeedItem::class, ['post' => $Post], key($Post->id))
                    @endforeach
               </div>
            </div>
            <!-- Suggestions section -->
            <div class="px-5 ml-6 hidden lg:block">
                <x-follower-suggestions/>

            </div>
       </div>

       @if(session()->has('success'))
        @push('scripts')
            <script>
                $.notify("{{session()->get('success')}}",'success')
            </script>
            {{session()->remove('success')}}
        @endpush
       @endif
</x-feed-layout>