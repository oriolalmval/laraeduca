<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Styles -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        body {
            background-image: url('{{ asset('images/stock-vector-school-notebook-background-d-flying-yellow-red-and-blue-paper-airplanes-in-the-sky-with-hand-2190640687.jpg') }}');
            background-size: cover;
            background-position: center;
        }
    </style>
</head>

<body class="antialiased font-sans flex items-center justify-center min-h-screen bg-gray-100">

    <main class="text-center p-10 bg-cornflower-blue-100 shadow-lg rounded-lg flex flex-col items-center justify-center">
        <div class="flex items-center justify-between w-full mb-6">
            <div>
                <a href="{{ route('dashboard') }}" wire:navigate>
                    <x-application-logo class="h-10 w-10"/>
                </a>
            </div>

            @if (Route::has('login'))
                <div class="flex ml-10">
                    <livewire:welcome.navigation />
                </div>
            @endif
        </div>
        <p class="text-gray-700 text-lg">Te presentamos la aplicación oficial de POGOEDUCA</p>

    </main>
</body>

</html>
