@props(['src'=>'','styles'=>''])

@if(empty($src))
  <x-svg name='profile'/>
@elseif(!empty($src))
   <img src="{{$src}}" {{$attributes->merge(["class"=>' '.$styles])}}/>
@endif
