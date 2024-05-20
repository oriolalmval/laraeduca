<x-app-layout>
    <div class="flex justify-center items-center h-screen">
        <div class="w-1/3 bg-cornflower-blue-200 border-2 border-black p-5 rounded-xl">
            <h1 class="text-center">AGREGA UN ESTUDIANTE</h1>
            <form class="flex flex-col items-center" method="POST" action="{{ route('students.store') }}">
                @csrf

                <div class="flex items-center py-5 w-full">
                    <label class="text-center w-1/6">NOMBRE</label>
                    <input name="name" class="w-full flex-1">
                </div>
                
                <div class="flex items-center py-5 w-full">
                    <label class="text-center w-1/6">EDAD</label>
                    <input name="age" class="w-full flex-1">
                </div>
                
                <div class="flex items-center gap-x-5">
                    <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">GUARDAR</button>
                    <a href="{{ route('students.index') }}" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">CANCELAR</a>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>
