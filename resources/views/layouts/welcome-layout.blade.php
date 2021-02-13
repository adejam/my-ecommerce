<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>@yield('title') . My-ecommerce</title>

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">

        {{-- @livewireStyles --}}

        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>
    </head>
    <body class="font-sans antialiased bg-white">
        <div class="min-h-screen">
            {{-- @livewire('navigation-dropdown') --}}
            <main>
                    <div id="alert-div">
                        <x-session-message />
                    </div>
                    <div class="mx-auto py-5 sm:px-6 lg:px-8">
                      {{ $slot }}
                    </div>
            </main>
        </div>
        <x-footer />
        @stack('modals')

        {{-- @livewireScripts --}}
    </body>
</html>
