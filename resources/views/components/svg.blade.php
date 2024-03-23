@props(['name','styles'=>'text-yellow-500','dimension'=>'h-6 w-6'])

<!-- Home Icon -->
@if($name == 'home')
    <svg class="{{$styles}} {{$dimension}} fill-current svg-icon" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" id="home">
   <path stroke-linecap="round" stroke-linejoin="round" d="m2.25 12 8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
</svg>

@endif

<!-- Search Icon -->
@if($name == 'search')
<svg class="{{$styles}} {{$dimension}} fill-current svg-icon" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" id="search">
  <path stroke-linecap="round" stroke-linejoin="round" d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
</svg>
@endif

<!-- Explore Icon -->
@if($name == 'compass')
<svg class="{{$styles}} {{$dimension}} fill-current svg-icon" fill="none" version="1.1" stroke-width="3" stroke="currentColor"  id="compass" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" 
	  viewBox="0 0 95.098 95.098"
	 xml:space="preserve">
<g>
	<g>
		<path stroke-linecap="round" stroke-linejoin="round" d="M47.549,0C21.288,0,0,21.288,0,47.549s21.288,47.549,47.549,47.549c26.262,0,47.549-21.288,47.549-47.549
			S73.811,0,47.549,0z M47.549,85.098C26.844,85.098,10,68.253,10,47.549S26.844,10,47.549,10s37.549,16.845,37.549,37.549
			S68.254,85.098,47.549,85.098z"/>
		<path stroke-linecap="round" stroke-linejoin="round" d="M77.665,29.911c-0.25-0.428-0.755-0.633-1.231-0.503l-33.783,9.213c-0.186,0.052-0.355,0.151-0.492,0.288L17.596,63.865
			c-0.346,0.354-0.414,0.895-0.164,1.32c0.25,0.428,0.755,0.635,1.232,0.504l33.783-9.214c0.093-0.024,0.182-0.062,0.265-0.11
			c0.083-0.049,0.159-0.108,0.228-0.178l24.562-24.957C77.848,30.879,77.915,30.337,77.665,29.911z M26.705,59.756l16.46-16.725
			l6.179,10.551L26.705,59.756z"/>
	</g>
</g>
</svg>
@endif
<!-- Real Icon -->
@if($name == 'reel')
<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" id="reel">
    <rect width="20" height="20" x="2" y="2"  stroke-linejoin="round" rx="4"></rect>
    <path stroke-linejoin="round" d="M9 11.809C9 11.3622 9.36221 11 9.80902 11V11C9.93461 11 10.0585 11.0292 10.1708 11.0854L14.5528 13.2764C14.8269 13.4134 15 13.6936 15 14V14C15 14.3064 14.8269 14.5866 14.5528 14.7236L10.1708 16.9146C10.0585 16.9708 9.93461 17 9.80902 17V17C9.36221 17 9 16.6378 9 16.191V11.809Z"></path>
    <path stroke-linecap="round" stroke-linejoin="round" d="M2 8H22M8 8L10 2M14 8L16 2"></path>
</svg>
@endif
<!-- Message Icon -->
@if($name == 'chat')
<svg class="{{$styles}} {{$dimension}} fill-current svg-icon" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" id='chat'>
  <path stroke-linecap="round" stroke-linejoin="round" d="M8.625 12a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm0 0H8.25m4.125 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm0 0H12m4.125 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm0 0h-.375M21 12c0 4.556-4.03 8.25-9 8.25a9.764 9.764 0 0 1-2.555-.337A5.972 5.972 0 0 1 5.41 20.97a5.969 5.969 0 0 1-.474-.065 4.48 4.48 0 0 0 .978-2.025c.09-.457-.133-.901-.467-1.226C3.93 16.178 3 14.189 3 12c0-4.556 4.03-8.25 9-8.25s9 3.694 9 8.25Z" />
</svg>
@endif
<!-- Notification Icon -->
@if($name == 'heart')
<svg class="{{$styles}} {{$dimension}} fill-current svg-icon" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" id="heart">
  <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12Z" />
</svg>
@endif
<!-- Add new Icon -->
@if($name == 'add')
<svg class="{{$styles}} {{$dimension}} fill-current svg-icon" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" id="add">
  <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v6m3-3H9m12 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
</svg>
@endif

<!-- Profile -->
@if($name == 'profile')
<svg class="{{$styles}} {{$dimension}} fill-current svg-icon" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" id='profile'>
  <path stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0 0 12 15.75a7.488 7.488 0 0 0-5.982 2.975m11.963 0a9 9 0 1 0-11.963 0m11.963 0A8.966 8.966 0 0 1 12 21a8.966 8.966 0 0 1-5.982-2.275M15 9.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
</svg>

@endif
