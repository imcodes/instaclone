@php
$faker = Faker\Factory::create();
$storyCount = 30;
$unreadStories = [2,5,4,6,1,8,10,6,7,15,28,30,25,28,18];
@endphp
<div {{$attributes->merge(['class'=>"relative"])}}>
    <div class="carousel carousel-center rounded-box">
         
        @for($x=1; $x <= $storyCount; $x++)
            <div class="{{ (in_array($x,$unreadStories)) ? 'story' : '' }} carousel-item flex-col px-2 mx-3 w-20">
                <div class="carousel-img w-20 h-20 rounded-full overflow-hidden">
                    <x-avater class="rounded-full w-full h-full" src="https://source.unsplash.com/random/500x500/?face-{{$x}}"/>
                </div>
                <p class="truncate block">{{$faker->name}}</p>
            </div>
        @endfor
    </div>
</div>