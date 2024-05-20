@php
    $userName = auth()->user()->name;
    $trimmedName = trim($userName);
@endphp

<x-app-layout>
    <div class="flex items-center justify-center">
        <div class="row">
            <h1 class="text-4xl p-9">Bienvenido, {{ trim($userName) }}</h1>
            <div class="flex object-cover px-24 ">
                <img class="w-1/2 border-2 border-black"
                    src="{{ asset('images/Default_puerta_de_un_instituto_solo_mostrar_edificio_desde_fue.jpg') }}">
                <img class="w-1/2 border-2 border-black"
                    src="{{ asset('images/Default_muestra_el_interior_de_una_clase_de_un_instituto.jpg') }}">
            </div>
        </div>
    </div>
</x-app-layout>
