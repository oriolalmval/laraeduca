<x-app-layout>
    <main class="flex flex-col items-center">
        <div class="flex shadow-2xl w-full items-center gap-5 pl-5">
            <button onclick="goBack()" class="my-4 bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 cursor-pointer">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 15 3 9m0 0 6-6M3 9h12a6 6 0 0 1 0 12h-3" />
                </svg>
            </button>
            <h1 class="text-4xl font-semibold my-4">Castellano</h1>
        </div>
        
        <h1 class="p-5 text-center font-extrabold text-2xl">SIMON DICE</h1>
        <div id="root"></div>
        <!-- Incluye el CSS compilado de React -->
        <link rel="stylesheet" href="{{ asset('react-2/static/css/main.a87111a3.css') }}">
        <!-- Incluye los archivos JS compilados de React -->
        <script src="{{ asset('react-2/static/js/main.c09c6352.js') }}"></script>
    </main>

        <script>
            function goBack() {
                window.history.back();
            }
        </script>

</x-app-layout>
