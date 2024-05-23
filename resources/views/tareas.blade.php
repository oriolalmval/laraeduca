<x-app-layout>

    <div class="mt-10 font-bold text-4xl">
        <h1 class="text-center">PRÓXIMAS TAREAS</h1>
        <hr class="w-11/12 mx-auto border-2 border-black mt-4">
    </div>

    <section class="flex flex-wrap mx-10">

        <div class="w-1/6 px-3 pt-3 relative" >
            <div class="w-full h-[150px] border-4 border-black px-3 flex flex-col relative cursor-pointer" id="matematicas" onclick="toggleActivities('matematicas')">
                <div class="absolute inset-0 bg-cover bg-center opacity-50"
                    style="background-image: url('<?php echo asset('images/realistic-math-chalkboard-background-illustration-free-vector.jpg'); ?>');">
                </div>
                <div class="flex flex-col flex-grow relative">
                    <div class="flex-none">
                        <h2>3r ESO</h2>
                    </div>
                    <div class="flex-grow flex items-center justify-center">
                        <h1 class="text-center font-bold text-2xl">MATEMÁTICAS</h1>
                    </div>
                </div>
            </div>
        </div>

        <div class="w-1/6 px-3 pt-3 relative">
            <div class="w-full h-[150px] border-4 border-black px-3 flex flex-col relative cursor-pointer" id="castellano" onclick="toggleActivities('castellano')">
                <div class="absolute inset-0 bg-cover bg-center opacity-50"
                    style="background-image: url('<?php echo asset('images/castellano.png'); ?>');">
                </div>
                <div class="flex flex-col flex-grow relative">
                    <div class="flex-none">
                        <h2>3r ESO</h2>
                    </div>
                    <div class="flex-grow flex items-center justify-center">
                        <h1 class="text-center font-bold text-2xl">CASTELLANO</h1>
                    </div>
                </div>
            </div>
        </div>

        <div class="w-1/6 px-3 pt-3 relative">
            <div class="w-full h-[150px] border-4 border-black px-3 flex flex-col relative cursor-pointer" id="catala" onclick="toggleActivities('catala')">
                <div class="absolute inset-0 bg-cover bg-center opacity-50"
                    style="background-image: url('{{ asset('images/literatura catalana1.jpg') }}');">
                </div>
                <div class="flex flex-col flex-grow relative">
                    <div class="flex-none">
                        <h2>3r ESO</h2>
                    </div>
                    <div class="flex-grow flex items-center justify-center">
                        <h1 class="text-center font-bold text-2xl">CATALÀ</h1>
                    </div>
                </div>
            </div>
        </div>

        <div class="w-1/6 px-3 pt-3 relative">
            <div class="w-full h-[150px] border-4 border-black px-3 flex flex-col relative cursor-pointer" id="sociales" onclick="toggleActivities('sociales')">
                <div class="absolute inset-0 bg-cover bg-center opacity-50"
                    style="background-image: url('{{ asset('images/asignaturas_cc_sociales.png') }}');">
                </div>
                <div class="relative flex flex-col flex-grow">
                    <div class="flex-none">
                        <h2>3r ESO</h2>
                    </div>
                    <div class="flex-grow flex items-center justify-center">
                        <h1 class="text-center font-bold text-2xl">SOCIALES</h1>
                    </div>
                </div>
            </div>
        </div>

        <div class="w-1/6 px-3 pt-3 relative">
            <div class="w-full h-[150px] border-4 border-black px-3 flex flex-col relative cursor-pointer" id="italiano" onclick="toggleActivities('italiano')">
                <div class="absolute inset-0 bg-cover bg-center opacity-50"
                    style="background-image: url('{{ asset('images/main-photo-756x350.jpg') }}');">
                </div>
                <div class="relative flex flex-col flex-grow">
                    <div class="flex-none">
                        <h2>3r ESO</h2>
                    </div>
                    <div class="flex-grow flex items-center justify-center">
                        <h1 class="text-center font-bold text-2xl">ITALIANO</h1>
                    </div>
                </div>
            </div>
        </div>

        <div class="w-1/6 px-3 pt-3 relative">
            <div class="w-full h-[150px] border-4 border-black px-3 flex flex-col relative cursor-pointer" id="musica" onclick="toggleActivities('musica')">
                <div class="absolute inset-0 bg-cover bg-center opacity-50"
                    style="background-image: url('{{ asset('images/music.png') }}');">
                </div>
                <div class="relative flex flex-col flex-grow">
                    <div class="flex-none">
                        <h2>3r ESO</h2>
                    </div>
                    <div class="flex-grow flex items-center justify-center">
                        <h1 class="text-center font-bold text-2xl">MÚSICA</h1>
                    </div>
                </div>
            </div>
        </div>

        <div class="hidden w-full h-full p-5 shadow-2xl mt-5 border border-slate-400" id="matematicas-actividades">
            <div class="flex flex-col gap-3">
                <div class="flex gap-5">
                    <h1>Actividades de Matemáticas</h1>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="size-6" onclick="toggleActivities('matematicas')">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                    </svg>

                </div>
                <ul>
                    <li>Actividad 1</li>
                    <li>Actividad 2</li>
                    <li>Actividad 3</li>
                    <li>Actividad 4</li>
                </ul>
                <a href="" class="my-1 p-2 bg-blue-400 w-32 text-center">Practica</a>
            </div>
        </div>

        <div class="hidden w-full h-full p-5 shadow-2xl mt-5 border border-slate-400" id="castellano-actividades">
            <div class="flex flex-col gap-3">
                <div class="flex gap-5">
                    <h1>Actividades de Castellano</h1>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="size-6" onclick="toggleActivities('castellano')">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                    </svg>

                </div>
                <ul>
                    <li>Actividad 1</li>
                    <li>Actividad 2</li>
                    <li>Actividad 3</li>
                    <li>Actividad 4</li>
                </ul>
                <a href="simondice" class="my-1 p-2 bg-blue-400 w-32 text-center">Practica</a>
            </div>
        </div>

        <div class="hidden w-full h-full p-5 shadow-2xl mt-5 border border-slate-400" id="catala-actividades">
            <div class="flex flex-col gap-3">
                <div class="flex gap-5">
                    <h1>Actividades de Català</h1>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="size-6" onclick="toggleActivities('catala')">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                    </svg>

                </div>
                <ul>
                    <li>Actividad 1</li>
                    <li>Actividad 2</li>
                    <li>Actividad 3</li>
                    <li>Actividad 4</li>
                </ul>
                <a href="" class="my-1 p-2 bg-blue-400 w-32 text-center">Practica</a>
            </div>
        </div>

        <div class="hidden w-full h-full p-5 shadow-2xl mt-5 border border-slate-400" id="sociales-actividades">
            <div class="flex flex-col gap-3">
                <div class="flex gap-5">
                    <h1>Actividades de Sociales</h1>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="size-6" onclick="toggleActivities('sociales')">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                    </svg>

                </div>
                <ul>
                    <li>Actividad 1</li>
                    <li>Actividad 2</li>
                    <li>Actividad 3</li>
                    <li>Actividad 4</li>
                </ul>
                <a href="geografia" class="my-1 p-2 bg-blue-400 w-32 text-center">Practica</a>
            </div>
        </div>

        <div class="hidden w-full h-full p-5 shadow-2xl mt-5 border border-slate-400" id="italiano-actividades">
            <div class="flex flex-col gap-3">
                <div class="flex gap-5">
                    <h1>Actividades de Italiano</h1>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="size-6" onclick="toggleActivities('italiano')">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                    </svg>

                </div>
                <ul>
                    <li>Actividad 1</li>
                    <li>Actividad 2</li>
                    <li>Actividad 3</li>
                    <li>Actividad 4</li>
                </ul>
                <a href="italia-quiz" class="my-1 p-2 bg-blue-400 w-32 text-center">Practica</a>
            </div>
        </div>

        <div class="hidden w-full h-full p-5 shadow-2xl mt-5 border border-slate-400" id="musica-actividades">
            <div class="flex flex-col gap-3">
                <div class="flex gap-5">
                    <h1>Actividades de Música</h1>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="size-6" onclick="toggleActivities('musica')">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                    </svg>

                </div>
                <ul>
                    <li>Actividad 1</li>
                    <li>Actividad 2</li>
                    <li>Actividad 3</li>
                    <li>Actividad 4</li>
                </ul>
                <a href="piano" class="my-1 p-2 bg-blue-400 w-32 text-center">Practica</a>
            </div>
        </div>

        <script>
            function toggleActivities(materia) {
                const activitiesDiv = document.getElementById(`${materia}-actividades`);
                activitiesDiv.classList.toggle('hidden');
            }
        </script>

    </section>
</x-app-layout>
