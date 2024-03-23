@php
$faker = Faker\Factory::create();
@endphp
<div {{$attributes->merge(['class'=>"relative"])}}>
    <div class="carousel carousel-center rounded-box">
    <div class="carousel-item flex-col px-2 mx-3 w-20">
        <img class="w-20 h-20 rounded-full" src="https://daisyui.com/images/stock/photo-1559703248-dcaaec9fab78.jpg" alt="Drink" />
        <p class="truncate block">{{$faker->name}}</p>
    </div> 
    <div class="carousel-item flex flex-col px-2 mx-3 w-20">
        <img class="w-20 h-20 rounded-full" src="https://daisyui.com/images/stock/photo-1565098772267-60af42b81ef2.jpg" alt="Drink" />
        <p class="truncate block">{{$faker->name}}</p>
    </div> 
    <div class="carousel-item flex flex-col px-2 mx-3 w-20">
        <img class="w-20 h-20 rounded-full" src="https://daisyui.com/images/stock/photo-1572635148818-ef6fd45eb394.jpg" alt="Drink" />
        <p class="truncate block">{{$faker->name}}</p>
    </div> 
    <div class="carousel-item flex flex-col px-2 mx-3 w-20">
        <img class="w-20 h-20 rounded-full" src="https://daisyui.com/images/stock/photo-1494253109108-2e30c049369b.jpg" alt="Drink" />
        <p class="truncate block">{{$faker->name}}</p>
    </div> 
    <div class="carousel-item flex flex-col px-2 mx-3 w-20">
        <img class="w-20 h-20 rounded-full" src="https://daisyui.com/images/stock/photo-1550258987-190a2d41a8ba.jpg" alt="Drink" />
        <p class="truncate block">{{$faker->name}}</p>
    </div> 
    <div class="carousel-item flex flex-col px-2 mx-3 w-20">
        <img class="w-20 h-20 rounded-full" src="https://daisyui.com/images/stock/photo-1550258987-190a2d41a8ba.jpg" alt="Drink" />
        <p class="truncate block">{{$faker->name}}</p>
    </div> 
    <div class="carousel-item flex flex-col px-2 mx-3 w-20">
        <img class="w-20 h-20 rounded-full" src="https://daisyui.com/images/stock/photo-1550258987-190a2d41a8ba.jpg" alt="Drink" />
        <p class="truncate block">{{$faker->name}}</p>
    </div> 
    <div class="carousel-item flex flex-col px-2 mx-3 w-20">
        <img class="w-20 h-20 rounded-full" src="https://daisyui.com/images/stock/photo-1559181567-c3190ca9959b.jpg" alt="Drink" />
        <p class="truncate block">{{$faker->name}}</p>
    </div> 
    <div class="carousel-item flex flex-col px-2 mx-3 w-20">
        <img class="w-20 h-20 rounded-full" src="https://daisyui.com/images/stock/photo-1601004890684-d8cbf643f5f2.jpg" alt="Drink" />
        <p class="truncate block">{{$faker->name}}</p>
    </div>
    </div>
</div>