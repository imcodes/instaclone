<x-feed-layout>
    <label for="my-drawer-2" class="btn btn-primary drawer-button lg:hidden">Open drawer</label>
       <div class="grid lg:columns-12 grid-flow-col gap-4 px-4">
            <!-- feed section -->
            <div class="lg:col-span-7 border-slate-300 relative">
                <x-story-slide class="overflow-hidden" style="width:100%;"/>
                
            </div>
            <!-- Suggestions section -->
            <div class="lg:col-span-5">
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