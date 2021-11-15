<!DOCTYPE html>
<html class="h-full bg-gray-100" lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">

    @livewireStyles

    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>
</head>

<style>
    [x-cloak] { display: none !important; }
</style>

<body class="h-full">
    <x-jet-banner />

    <div x-data="{ isOn: false }" class="min-h-full">

        @livewire('navigation-menu')

        <div class="lg:pl-64 flex flex-col flex-1">
            <!-- Top Header -->
            <x-header></x-header>

            <main class="flex-1 pb-8">
                <!-- Page header -->
                <x-page-header></x-page-header>

                <!-- Page Content -->
                <div class="mt-8">
                    {{ $slot }}
                </div>
            </main>
        </div>
    </div>

    @stack('modals')

    @livewireScripts
</body>

</html>
