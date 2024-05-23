<x-app-layout>
    <section class="flex flex-col m-10">
        <div class="flex gap-2 items-center p-5">
            <h1>CREACIÓN DE ESTUDIANTES</h1>
            <a href="{{ route('students.create') }}" class="border-2 border-black rounded-xl bg-blue-300 hover:bg-blue-500">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                  </svg>                  
            </a>
        </div>

        <table class="border border-black">
            <thead>
                <tr>
                    <th class="border-2 border-black">Id</th>
                    <th class="border-2 border-black">Name</th>
                    <th class="border-2 border-black">Age</th>
                    <th class="border-2 border-black">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($students as $student)
                    <tr>
                        <td class="border border-black">
                            {{ $student->id }}
                        </td>
                        <td class="border border-black text-center">{{ $student->name }}</td>
                        <td class="border border-black text-center">{{ $student->age }}</td>
                        <td class="border border-black text-center w-48">
                            <div class="flex w-full items-center justify-center">

                                <a href="{{ route('students.edit', $student->id) }}"
                                    class="p-2 bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded m-3">Editar</a>

                                <button class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded m-3" type="button"
                                    onclick="confirmDelete('{{ $student->id }}')">Eliminar</button>
                                    
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

    </section>
</x-app-layout>


<script>
    function confirmDelete(id) {
        alertify.confirm("This is a confirm dialog.", function (e) {
            if(e) {
                let form = document.createElement('form');
                form.method = 'POST';
                form.action = `/students/${id}`;
                form.innerHTML = '@csrf @method("DELETE")';
                document.body.appendChild(form);
                form.submit();
            } else {
                return false;
            }
        });
    }
</script>
