@php
$faker = Faker\Factory::create();
@endphp
<div {{$attributes->merge(['class'=>"relative"])}}>
    <div class="carousel carousel-center rounded-box">
        <div class="story carousel-item flex-col px-2 mx-3 w-20">
            <div class="carousel-img w-20 h-20 rounded-full overflow-hidden">
                <x-avater class="rounded-full w-full h-full" src="https://source.unsplash.com/random/500x500/?face-2"/>
            </div>
            <p class="truncate block">{{$faker->name}}</p>
        </div> 
        <div class="story carousel-item flex flex-col px-2 mx-3 w-20">
            <div class="carousel-img w-20 h-20 rounded-full overflow-hidden">
            <x-avater class="rounded-full w-full h-full" src="https://source.unsplash.com/random/500x500/?face-10"/>
            </div>
            <p class="truncate block">{{$faker->name}}</p>
        </div> 
        <div class="story carousel-item flex flex-col px-2 mx-3 w-20">
            <div class="carousel-img w-20 h-20 rounded-full overflow-hidden">
                <x-avater class="rounded-full w-full h-full" src="https://source.unsplash.com/random/500x500/?face-01"/>
            </div>
            <p class="truncate block">{{$faker->name}}</p>
        </div> 
        <div class="carousel-item flex flex-col px-2 mx-3 w-20">
            <div class="carousel-img w-20 h-20 rounded-full overflow-hidden">
                <x-avater class="rounded-full w-full h-full" src="https://source.unsplash.com/random/500x500/?face-3"/>
            </div>
            <p class="truncate block">{{$faker->name}}</p>
        </div> 
        <div class="story carousel-item flex flex-col px-2 mx-3 w-20">
            <div class="carousel-img w-20 h-20 rounded-full overflow-hidden">
            <x-avater class="rounded-full w-full h-full" src="https://source.unsplash.com/random/500x500/?face-11"/>
            </div>
            <p class="truncate block">{{$faker->name}}</p>
        </div>
        <div class="story carousel-item flex flex-col px-2 mx-3 w-20">
            <div class="carousel-img w-20 h-20 rounded-full overflow-hidden">
                <x-avater class="rounded-full w-full h-full" src="https://source.unsplash.com/random/500x500/?face-4"/>
            </div>
            <p class="truncate block">{{$faker->name}}</p>
        </div>
        <div class="carousel-item flex flex-col px-2 mx-3 w-20">
            <div class="carousel-img w-20 h-20 rounded-full overflow-hidden">
                <img class="w-full h-full rounded-full" src="https://daisyui.com/images/stock/photo-1550258987-190a2d41a8ba.jpg" alt="Drink" />
            </div>
            <p class="truncate block">{{$faker->name}}</p>
        </div> 
        <div class="carousel-item flex flex-col px-2 mx-3 w-20">
            <div class="carousel-img w-20 h-20 rounded-full overflow-hidden">
                <x-avater class="rounded-full w-full h-full" src="https://source.unsplash.com/random/500x500/?face-5"/>
            </div>
            <p class="truncate block">{{$faker->name}}</p>
        </div> 
        <div class="carousel-item flex flex-col px-2 mx-3 w-20">
            <div class="carousel-img w-20 h-20 rounded-full overflow-hidden">
                <x-avater class="rounded-full w-full h-full" src="https://source.unsplash.com/random/500x500/?face-6"/>
            </div>
            <p class="truncate block">{{$faker->name}}</p>
        </div> 
        <div class="carousel-item flex flex-col px-2 mx-3 w-20">
            <div class="carousel-img w-20 h-20 rounded-full overflow-hidden">
                <x-avater class="rounded-full w-full h-full" src="https://source.unsplash.com/random/500x500/?face-7"/>
            </div>
            <p class="truncate block">{{$faker->name}}</p>
        </div> 
        <div class="carousel-item flex flex-col px-2 mx-3 w-20">
            <div class="carousel-img w-20 h-20 rounded-full overflow-hidden">
                <x-avater class="rounded-full w-full h-full" src="https://source.unsplash.com/random/500x500/?face-8"/>
            </div>
            <p class="truncate block">{{$faker->name}}</p>
        </div>
    </div>
</div>