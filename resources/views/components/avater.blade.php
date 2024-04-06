@props(['src'=>'','styles'=>''])

@if(empty($src))
  <x-svg name='profile' class="{{$styles}}"/>
@elseif(!empty($src))
   <img src="{{$src}}" {{$attributes->merge(["class"=>' '.$styles])}}/>
@endif
