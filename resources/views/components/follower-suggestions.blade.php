@php
$faker = Faker\Factory::create();
@endphp
<div class="flex flex-col gap-3">

    <div class="grid grid-flow-col gap-3 space-x-8 w-full text-sm mb-2">
        <p class="text-gray-400">Suggested for you</p>
        <a href="#" class="text-right">See All</a>
    </div>

    <div class="flex flex-row justify-center items-center gap-3">
        <x-avater src="https://source.unsplash.com/random/500x500/?face-09" styles="rounded-full w-10 h-10"/>
        <div class="grid grid-flow-col gap-3 text-sm space-x-8 w-full">
            <p>
                <strong>{{$faker->name}}</strong>
                <span class="text-xs text-gray-400 block">Suggested for you</span>
            </p>
            <a href="#" class="text-blue-500 text-right"> Follow</a>
        </div>
    </div>
    <div class="flex flex-row justify-center items-center gap-3">
        <x-avater src="https://source.unsplash.com/random/500x500/?face-12" styles="rounded-full w-10 h-10"/>
        <div class="grid grid-flow-col gap-3 text-sm space-x-8 w-full">
            <p>
                <strong>{{$faker->name}}</strong>
                <span class="text-xs text-gray-400 block">Follows you</span>
            </p>
            <a href="#" class="text-blue-500 text-right"> Follow</a>
        </div>
    </div>
    <div class="flex flex-row justify-center items-center gap-3 m">
        <x-avater src="https://source.unsplash.com/random/500x500/?face-13" styles="rounded-full w-10 h-10"/>
        <div class="grid grid-flow-col gap-3 text-sm space-x-8 w-full">
            <p>
                <strong>{{$faker->name}}</strong>
                <span class="text-xs text-gray-400 block">Suggested for you</span>
            </p>
            <a href="#" class="text-blue-500 text-right"> Follow</a>
        </div>
    </div>
</div>