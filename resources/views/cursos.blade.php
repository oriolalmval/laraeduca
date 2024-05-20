<x-app-layout>
    <h1 class="m-8 font-bold text-4xl">Mis cursos</h1>

    <section class="flex flex-wrap mx-10">
        <div class="w-1/3 p-3">
            <div class="relative w-full h-[250px] border-4 border-black p-3 flex flex-col cursor-pointer">
                <!-- Imagen de fondo con opacidad utilizando un pseudo-elemento -->
                <div class="absolute inset-0 bg-cover bg-center opacity-50"
                    style="background-image: url('{{ asset('images/realistic-math-chalkboard-background-illustration-free-vector.jpg') }}');">
                </div>

                <!-- Contenido -->
                <div class="relative flex flex-col flex-grow">
                    <div class="flex-none">
                        <h2>3r ESO</h2>
                    </div>
                    <div class="flex-grow flex items-center justify-center">
                        <h1 class="text-center font-bold text-4xl">MATEMÁTICAS</h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="w-1/3 p-3">
            <div class="relative w-full h-[250px] border-4 border-black p-3 flex flex-col cursor-pointer">
                <!-- Imagen de fondo con opacidad utilizando un pseudo-elemento -->
                <div class="absolute inset-0 bg-cover bg-center opacity-50"
                    style="background-image: url('{{ asset('images/castellano.png') }}');">
                </div>
        
                <!-- Contenido -->
                <div class="relative flex flex-col flex-grow">
                    <div class="flex-none">
                        <h2>3r ESO</h2>
                    </div>
                    <div class="flex-grow flex items-center justify-center">
                        <h1 class="text-center font-bold text-4xl">CASTELLANO</h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="w-1/3 p-3">
            <div class="relative w-full h-[250px] border-4 border-black p-3 flex flex-col cursor-pointer">
                <!-- Imagen de fondo con opacidad utilizando un pseudo-elemento -->
                <div class="absolute inset-0 bg-cover bg-center opacity-50"
                    style="background-image: url('{{ asset('images/literatura catalana1.jpg') }}');">
                </div>
        
                <!-- Contenido -->
                <div class="relative flex flex-col flex-grow">
                    <div class="flex-none">
                        <h2>3r ESO</h2>
                    </div>
                    <div class="flex-grow flex items-center justify-center">
                        <h1 class="text-center font-bold text-4xl">CATALÀ</h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="w-1/3 p-3">
            <div class="relative w-full h-[250px] border-4 border-black p-3 flex flex-col cursor-pointer">
                <!-- Imagen de fondo con opacidad utilizando un pseudo-elemento -->
                <div class="absolute inset-0 bg-cover bg-center opacity-50"
                    style="background-image: url('{{ asset('images/asignaturas_cc_sociales.png') }}');">
                </div>
        
                <!-- Contenido -->
                <div class="relative flex flex-col flex-grow">
                    <div class="flex-none">
                        <h2>3r ESO</h2>
                    </div>
                    <div class="flex-grow flex items-center justify-center">
                        <h1 class="text-center font-bold text-4xl">SOCIALES</h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="w-1/3 p-3">
            <div class="relative w-full h-[250px] border-4 border-black p-3 flex flex-col cursor-pointer">
                <!-- Imagen de fondo con opacidad utilizando un pseudo-elemento -->
                <div class="absolute inset-0 bg-cover bg-center opacity-50"
                    style="background-image: url('{{ asset('images/main-photo-756x350.jpg') }}');">
                </div>
        
                <!-- Contenido -->
                <div class="relative flex flex-col flex-grow">
                    <div class="flex-none">
                        <h2>3r ESO</h2>
                    </div>
                    <div class="flex-grow flex items-center justify-center">
                        <h1 class="text-center font-bold text-4xl">ITALIANO</h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="w-1/3 p-3">
            <div class="relative w-full h-[250px] border-4 border-black p-3 flex flex-col cursor-pointer">
                <!-- Imagen de fondo con opacidad utilizando un pseudo-elemento -->
                <div class="absolute inset-0 bg-cover bg-center opacity-50"
                    style="background-image: url('{{ asset('images/music.png') }}');">
                </div>
        
                <!-- Contenido -->
                <div class="relative flex flex-col flex-grow">
                    <div class="flex-none">
                        <h2>3r ESO</h2>
                    </div>
                    <div class="flex-grow flex items-center justify-center">
                        <h1 class="text-center font-bold text-4xl">MÚSICA</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-app-layout>
