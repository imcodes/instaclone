@php
$faker = Faker\Factory::create();

//Just for fake follower purpose
$followerCount = 10;
$followMsg = ['Suggested for you', 'Follows you','Popular', 'Friends']
@endphp
<div class="flex flex-col gap-3">

    <div class="grid grid-flow-col gap-3 space-x-8 w-full text-sm mb-2">
        <p class="text-gray-400">Suggested for you</p>
        <a href="#" class="text-right">See All</a>
    </div>

    @for($x = 1; $x <= $followerCount; $x++)
        @php $img = mt_rand(100,200) @endphp
        <div class="flex flex-row justify-center items-center gap-3">
            <x-avater src="https://source.unsplash.com/random/500x500/?face-{{$img}}" styles="rounded-full w-10 h-10"/>
            <div class="grid grid-flow-col gap-3 text-sm space-x-8 w-full">
                <p>
                    <strong>{{$faker->name}}</strong>
                    <span class="text-xs text-gray-400 block">{{$followMsg[mt_rand(1,4) - 1]}}</span>
                </p>
                <a href="#" class="text-blue-500 text-right"> Follow</a>
            </div>
        </div>
    @endfor
    
</div>