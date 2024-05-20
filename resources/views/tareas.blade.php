<x-app-layout>

    <div class="mt-10 font-bold text-4xl">
        <h1 class="text-center">PRÓXIMAS TAREAS</h1>
        <hr class="w-11/12 mx-auto border-2 border-black mt-4">
    </div>

    <section class="flex flex-wrap mx-10">


        <div class="w-1/6 px-3 pt-3 relative">
            <div class="w-full h-[150px] border-4 border-black px-3 flex flex-col relative">
                <div class="absolute inset-0 bg-cover bg-center opacity-50"
                    style="background-image: url('{{ asset('images/realistic-math-chalkboard-background-illustration-free-vector.jpg') }}');">
                </div>

                <!-- Contenido -->
                <div class="flex flex-col flex-grow relative">
                    <div class="flex-none">
                        <h2>3r ESO</h2>
                    </div>
                    <div class="flex-grow flex items-center justify-center">
                        <h1 class="text-center font-bold text-2xl">MATEMÁTICAS</h1>
                    </div>
                </div>
            </div>

            <!-- Contenido desplegable -->
            <div class="dropdown-content hidden bg-black border-2 border-black p-3 mt-3 w-[203.5vh] h-[50vh]">
                <!-- Contenido del dropdown -->
                <p class="text-white text-center">HOLA MUNDO</p>
            </div>
        </div>


        <div class="w-1/6 px-3 pt-3 relative">
            <div class="w-full h-[150px] border-4 border-black px-3 flex flex-col relative">
                <div class="absolute inset-0 bg-cover bg-center opacity-50"
                style="background-image: url('{{ asset('images/castellano.png') }}');">
                </div>

                <!-- Contenido -->
                <div class="flex flex-col flex-grow relative">
                    <div class="flex-none">
                        <h2>3r ESO</h2>
                    </div>
                    <div class="flex-grow flex items-center justify-center">
                        <h1 class="text-center font-bold text-2xl">CASTELLANO</h1>
                    </div>
                </div>
            </div>

            <!-- Contenido desplegable -->
            <div class="dropdown-content hidden bg-black border-2 border-black p-3 mt-3">
                <!-- Contenido del dropdown -->
                <p class="text-white text-center">HOLA MUNDO</p>
            </div>
        </div>



        <div class="w-1/6 px-3 pt-3 relative">
            <div class="w-full h-[150px] border-4 border-black px-3 flex flex-col relative">
                <div class="absolute inset-0 bg-cover bg-center opacity-50"
                    style="background-image: url('{{ asset('images/literatura catalana1.jpg') }}');">
                </div>
        
                <!-- Contenido -->
                <div class="flex flex-col flex-grow relative">
                    <div class="flex-none">
                        <h2>3r ESO</h2>
                    </div>
                    <div class="flex-grow flex items-center justify-center">
                        <h1 class="text-center font-bold text-2xl">CATALÀ</h1>
                    </div>
                </div>
            </div>
            <!-- Contenido desplegable -->
            <div class="dropdown-content hidden bg-black border-2 border-black p-3 mt-3">
                <!-- Contenido del dropdown -->
                <p class="text-white text-center">HOLA MUNDO</p>
            </div>
        </div>
        


        <div class="w-1/6 px-3 pt-3 relative">
            <div class="w-full h-[150px] border-4 border-black px-3 flex flex-col relative">
                <div class="absolute inset-0 bg-cover bg-center opacity-50"
                    style="background-image: url('{{ asset('images/asignaturas_cc_sociales.png') }}');">
                </div>
        
                <!-- Contenido -->
                <div class="relative flex flex-col flex-grow">
                    <div class="flex-none">
                        <h2>3r ESO</h2>
                    </div>
                    <div class="flex-grow flex items-center justify-center">
                        <h1 class="text-center font-bold text-2xl">SOCIALES</h1>
                    </div>
                </div>
            </div>
            <!-- Contenido desplegable -->
            <div class="dropdown-content hidden bg-black border-2 border-black p-3 mt-3">
                <!-- Contenido del dropdown -->
                <p class="text-white text-center">HOLA MUNDO</p>
            </div>
        </div>
        


        <div class="w-1/6 px-3 pt-3 relative">
            <div class="w-full h-[150px] border-4 border-black px-3 flex flex-col relative">
                <div class="absolute inset-0 bg-cover bg-center opacity-50"
                    style="background-image: url('{{ asset('images/main-photo-756x350.jpg') }}');">
                </div>
        
                <!-- Contenido -->
                <div class="relative flex flex-col flex-grow">
                    <div class="flex-none">
                        <h2>3r ESO</h2>
                    </div>
                    <div class="flex-grow flex items-center justify-center">
                        <h1 class="text-center font-bold text-2xl">ITALIANO</h1>
                    </div>
                </div>
            </div>
            <!-- Contenido desplegable -->
            <div class="dropdown-content hidden bg-black border-2 border-black p-3 mt-3">
                <!-- Contenido del dropdown -->
                <p class="text-white text-center">HOLA MUNDO</p>
            </div>
        </div>
        


        <div class="w-1/6 px-3 pt-3 relative">
            <div class="w-full h-[150px] border-4 border-black px-3 flex flex-col relative">
                <div class="absolute inset-0 bg-cover bg-center opacity-50"
                    style="background-image: url('{{ asset('images/music.png') }}');">
                </div>
        
                <!-- Contenido -->
                <div class="relative flex flex-col flex-grow">
                    <div class="flex-none">
                        <h2>3r ESO</h2>
                    </div>
                    <div class="flex-grow flex items-center justify-center">
                        <h1 class="text-center font-bold text-2xl">MÚSICA</h1>
                    </div>
                </div>
            </div>
            <!-- Contenido desplegable -->
            <div class="dropdown-content hidden bg-black border-2 border-black p-3 mt-3">
                <!-- Contenido del dropdown -->
                <p class="text-white text-center">HOLA MUNDO</p>
            </div>
        </div>
        
        {{-- ESTE SCRIPT PUEDE DESPLEGAR TODAS LA PESTAÑAS A LA VEZ --}}
        {{-- <script>
            // Obtén todos los elementos con la clase "relative" que contienen el dropdown
            var dropdowns = document.querySelectorAll('.relative');

            // Itera sobre cada dropdown
            dropdowns.forEach(function(dropdown) {
                // Agrega un event listener para el clic en el dropdown
                dropdown.addEventListener('click', function() {
                    // Encuentra el contenido desplegable dentro del dropdown
                    var dropdownContent = dropdown.querySelector('.dropdown-content');
                    // Alternar la clase "hidden" para mostrar u ocultar el contenido desplegable
                    dropdownContent.classList.toggle('hidden');
                });
            });
        </script> --}}

        <script>
            var dropdowns = document.querySelectorAll('.relative');
        
            dropdowns.forEach(function(dropdown) {
                dropdown.addEventListener('click', function() {
                    var dropdownContent = dropdown.querySelector('.dropdown-content');
                    var allDropdownContents = document.querySelectorAll('.dropdown-content');
                    
                    allDropdownContents.forEach(function(content) {
                        if (content !== dropdownContent) {
                            content.classList.add('hidden');
                        }
                    });
                    
                    dropdownContent.classList.toggle('hidden');
                });
            });
        </script>
        


    </section>
</x-app-layout>
