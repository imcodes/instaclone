<x-feed-layout>
    <div class="drawer lg:drawer-open">
    <input id="my-drawer-2" type="checkbox" class="drawer-toggle" />
    <div class="drawer-content flex flex-col items-center justify-center dark:text-slate-200">
        <!-- Page content here -->
        <label for="my-drawer-2" class="btn btn-primary drawer-button lg:hidden">Open drawer</label>
       <div class="grid columns-12 grid-flow-col gap-4 px-4">
            <!-- feed section -->
            <div class="col-span-7 border-slate-300 relative">
                <x-story-slide class="overflow-hidden" style="width:100%;"/>
                
            </div>
            <!-- Suggestions section -->
            <div class="col-span-5">
                <x-follower-suggestions/>

            </div>
       </div>
    </div> 
    <div class="drawer-side px-4 w-12 border-opacity-5 border-e-2 border-gray-400">
        <label for="my-drawer-2" aria-label="close sidebar" class="drawer-overlay"></label> 
        
        <!-- Sidebar content here -->
        <x-sidebar/>
    
    </div>
    </div>
</x-feed-layout>