<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-theme='dark'>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="icon" href="{{asset('/imgs/favicon.png')}}" type="image/x-icon">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        @stack('header-script')
        

        <!-- Styles -->
        @stack('styles')
        <!-- Animate css -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/animate.css@4.1.1/animate.min.css">

        <!-- tailwind css -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@3.4.3/base.min.css">
        <link rel="stylesheet" href="{{asset('css/custom-css.css')}}">
        @livewireStyles
    </head>
    <body class="font-sans antialiased">
        <x-banner />

        <div class="min-h-screen bg-gray-100 dark:bg-gray-900">
           

            <!-- Page Heading -->
            @if (isset ($header))
                <header class="bg-white dark:bg-gray-800 shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif

            <!-- Page Content -->
            <main {{$attributes->merge(['class'])}}>
            <div class="drawer lg:drawer-open">
    <input id="my-drawer-2" type="checkbox" class="drawer-toggle" />
    <div class="drawer-content dark:text-slate-200">
        <!-- Page content here -->
        {{ $slot }}
        
    </div> 
    <div class="drawer-side light:bg-white light:text-dark border-opacity-15 border-r ">
        <label for="my-drawer-2" aria-label="close sidebar" class="drawer-overlay"></label> 
        
        <!-- Sidebar content here -->
        <x-sidebar/>
    
    </div>
    </div>
            </main>
        </div>

        @stack('modals')

        <!-- Tailwind css Js -->
        <script src="https://cdn.jsdelivr.net/npm/tailwindcss@3.4.3/lib/index.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.min.js"></script>
        <script src="{{asset('js/notify.js')}}"></script>
        <script>
            $.notify.defaults({
                elementPosition: 'top center',
                globalPosition: 'bottom left',
            })
            $.notify.addStyle('happyblue', {
                html: "<div>☺<span data-notify-text/>☺</div>",
                classes: {
                    base: {
                    "white-space": "nowrap",
                    "background-color": "lightblue",
                    "padding": "5px"
                    },
                    superblue: {
                    "color": "white",
                    "background-color": "blue"
                    }
                }
                });
        </script>

        @stack('scripts')

        @livewireScripts
    </body>
</html>
