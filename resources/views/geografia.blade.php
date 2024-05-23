<x-app-layout>
    <main class="flex flex-col items-center w-full">
        <div class="flex shadow-2xl w-full items-center gap-5 pl-5">
            <button onclick="goBack()" class="my-4 bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 cursor-pointer">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 15 3 9m0 0 6-6M3 9h12a6 6 0 0 1 0 12h-3" />
                </svg>
            </button>
            <h1 class="text-4xl font-semibold my-4">Sociales</h1>
        </div>

        <div id="root"></div>
        <!-- Incluye el CSS compilado de React -->
        <link rel="stylesheet" href="{{ asset('react/static/css/main.a0658bed.css') }}">
        <!-- Incluye los archivos JS compilados de React -->
        <script src="{{ asset('react/static/js/main.b48a9a9a.js') }}"></script>
    </main>

    <script>
        function goBack() {
            window.history.back();
        }
    </script>

</x-app-layout>
