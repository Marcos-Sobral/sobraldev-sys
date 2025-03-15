<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <script src="https://cdn.tailwindcss.com"></script>
        
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
        <link rel="icon" href="{{ URL::asset('assets/img/logo/3.png') }}" type="image/x-icon">
        <link rel="stylesheet" href="{{ URL::asset('assets/css/style.css') }}">

    </head>
    <body class="font-sans antialiased" x-data="{ sidebarOpen: false }">
        <div class="flex min-h-screen bg-gray-100 dark:bg-gray-900">
            <!-- Sidebar (controlado por Alpine.js) -->
            <div :class="sidebarOpen ? 'block' : 'hidden'" class="w-80 h-screen overflow-y-auto">
                @include('layouts.sidebar')
            </div>
            <!-- Main Content -->
            <div class="flex-1 h-screen overflow-y-auto">
                <livewire:layout.navigation />

                <!-- Page Heading -->
                @if (isset($header))
                    <header class="dark:bg-gray-800 shadow">
                        <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                            {{ $header }}
                        </div>
                    </header>
                @endif

                <!-- Page Content -->
                <main class="p-4">
                    {{ $slot }}
                </main>
            </div>
        </div>
    </body>
</html>
