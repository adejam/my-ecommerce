<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title') . Communivis</title>
     <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    {{-- @livewireStyles --}}

    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>
</head>

<body class="font-sans antialiased bg-white">
    <div class="min-h-screen bg-white">
        {{-- @livewire('navigation-dropdown') --}}
        <x-navbar />
        <section class="flex">
            {{-- <x-side-nav :tabs="sideNavDatas()" /> --}}

            <main class="">
                <div class="">
                    <div id="alert-div">
                        <x-session-message />
                    </div>
                    <div class="mx-auto py-5 sm:px-6 lg:px-8">
                      {{ $slot }}
                    </div>
                </div>
                <div class="hidden medium:block medium:w-1/3">

                </div> 
            </main>
        </section>
        <x-footer />

    </div>

    @stack('modals')

    {{-- @livewireScripts --}}
</body>

</html>
