<x-app-layout>
    <div class="flex justify-center items-center pt-28">
        <div class="w-1/3 bg-cornflower-blue-200 border-2 border-black p-5 rounded-xl">
            <h1 class="text-center">ACTUALIZA UN ESTUDIANTE</h1>
            <form class="flex flex-col items-center" method="POST" action="{{ route('students.update', $student->id) }}">
                @csrf
                @method('PUT')

                <div class="flex items-center py-5 w-full">
                    <label class="w-1/6" for="name">NOMBRE</label>
                    <input name="name" id="name" value="{{ old('name', $student->name) }}" class="w-full flex-1 rounded-xl">
                </div>
                
                <div class="flex items-center py-5 w-full">
                    <label class="w-1/6" for="age">EDAD</label>
                    <input name="age" id="age" value="{{ old('age', $student->age) }}" class="w-full flex-1 rounded-xl">
                </div>
                
                <div class="flex items-center gap-x-5 flex-wrap">
                    <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">ACTUALIZAR</button>
                    <a href="{{ route('students.index') }}" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">CANCELAR</a>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>
