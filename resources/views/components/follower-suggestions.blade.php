@php
$faker = Faker\Factory::create();
@endphp
<div class="flex flex-col gap-3">

    <div class="flex flex-row gap-3">
        <x-avater src="{{asset('imgs/favicon.png')}}" styles="w-8 h-8"/>
        <div>
            <p>{{$faker->name}}</p>
            <a href="#" class="text-blue-600"> follow</a>
        </div>
    </div>
    <div class="flex flex-row gap-3">
        <x-avater src="{{asset('imgs/favicon.png')}}" styles="w-8 h-8"/>
        <div>
            <p>{{$faker->name}}</p>
            <a href="#" class="text-blue-800"> follow</a>
        </div>
    </div>
    <div class="flex flex-row gap-3 m">
        <x-avater src="{{asset('imgs/favicon.png')}}" styles="w-8 h-8"/>
        <div>
            <p>{{$faker->name}}</p>
            <a href="#" class="text-blue-600"> follow</a>
        </div>
    </div>
</div>