<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="assets/css/aos.min.css">
  <style>
    .platform {
        position: relative;
        transition: right 0.3s;
    }
  </style>
  <title>Koe</title>
    <link rel="icon" href="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=600" type="image/x-icon">
</head>
<body>
    <?php
        include 'header.php';
    ?>
    <section class="h-screen">
        <div class="relative top-1/4">
            <div class="flex justify-center mb-5" data-aos="fade-up">
                <svg xmlns="http://www.w3.org/2000/svg" width="45" height="45" fill="#1E52DC" class="bi bi-cpu-fill" viewBox="0 0 16 16">
                    <path d="M6.5 6a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5z"/>
                    <path d="M5.5.5a.5.5 0 0 0-1 0V2A2.5 2.5 0 0 0 2 4.5H.5a.5.5 0 0 0 0 1H2v1H.5a.5.5 0 0 0 0 1H2v1H.5a.5.5 0 0 0 0 1H2v1H.5a.5.5 0 0 0 0 1H2A2.5 2.5 0 0 0 4.5 14v1.5a.5.5 0 0 0 1 0V14h1v1.5a.5.5 0 0 0 1 0V14h1v1.5a.5.5 0 0 0 1 0V14h1v1.5a.5.5 0 0 0 1 0V14a2.5 2.5 0 0 0 2.5-2.5h1.5a.5.5 0 0 0 0-1H14v-1h1.5a.5.5 0 0 0 0-1H14v-1h1.5a.5.5 0 0 0 0-1H14v-1h1.5a.5.5 0 0 0 0-1H14A2.5 2.5 0 0 0 11.5 2V.5a.5.5 0 0 0-1 0V2h-1V.5a.5.5 0 0 0-1 0V2h-1V.5a.5.5 0 0 0-1 0V2h-1zm1 4.5h3A1.5 1.5 0 0 1 11 6.5v3A1.5 1.5 0 0 1 9.5 11h-3A1.5 1.5 0 0 1 5 9.5v-3A1.5 1.5 0 0 1 6.5 5"/>
                </svg>
            </div>
            <h1 class="text-3xl text-center font-bold mb-4" data-aos="fade-up">
                Produce voces realistas, hermosas y vibrantes <br> con nuestra plataforma
            </h1>
            <p class="text-center text-xl mb-8 font-light" data-aos="fade-up">En Koe investigamos el poder de la IA aplicada a la generación de audio.</p>
            <div class="flex justify-center" data-aos="fade-up">
                <button class="rounded-full text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 shadow-lg shadow-blue-500/50 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">Me interesa. Empecemos.</button>
                <button class="rounded-full border border-gray-300 px-5 py-2.5 text-center me-2 mb-2 font-medium rounded-lg text-sm">Probar gratuitamente.</button>
            </div>
        </div>
    </section>
    <section class="mx-11 h-screen">
        <div class="flex justify-center mb-5" data-aos="fade-up">
            <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" fill="#1E52DC" class="bi bi-soundwave" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M8.5 2a.5.5 0 0 1 .5.5v11a.5.5 0 0 1-1 0v-11a.5.5 0 0 1 .5-.5m-2 2a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5m4 0a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5m-6 1.5A.5.5 0 0 1 5 6v4a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m8 0a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m-10 1A.5.5 0 0 1 3 7v2a.5.5 0 0 1-1 0V7a.5.5 0 0 1 .5-.5m12 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0V7a.5.5 0 0 1 .5-.5"/>
            </svg>
        </div>
        <p class="text-center text-xl font-light mb-5" data-aos="fade-up">Presentamos nuestro modelo generador TTS de vanguardia</p>
        <h1 class="text-3xl text-center font-bold mb-10" data-aos="fade-up">Motor acústico</h1>
        <form>
            <div class="w-full mb-4 border border-gray-200 rounded-lg bg-gray-50" data-aos="fade-up">
                <div class="px-4 py-2 bg-white rounded-b-lg">
                    <label for="editor" class="sr-only">Procesar</label>
                    <textarea id="editor" rows="8" class="block w-full px-0 text-sm text-gray-800 bg-white border-0 focus:ring-0" placeholder="Escribe lo que sea..." required ></textarea>
                </div>
            </div>
            <button data-aos="fade-up" type="submit" class="float-right px-5 py-2.5 text-sm font-medium text-center text-white bg-blue-700 rounded-lg focus:ring-4 focus:ring-blue-200 hover:bg-blue-800">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M5.25 5.653c0-.856.917-1.398 1.667-.986l11.54 6.347a1.125 1.125 0 0 1 0 1.972l-11.54 6.347a1.125 1.125 0 0 1-1.667-.986V5.653Z" />
                </svg>
            </button>
        </form>

    </section>
    <section class="mx-11 pb-10">
        <div class="flex justify-center mb-5 clear-both" data-aos="fade-up">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="#1E52DC" class="size-10">
                <path stroke-linecap="round" stroke-linejoin="round" d="m5.25 4.5 7.5 7.5-7.5 7.5m6-15 7.5 7.5-7.5 7.5" />
            </svg>
        </div>
        <h1 class="text-3xl text-center font-bold mb-10" data-aos="fade-up">
            ¿Como puedes usar <span class="text-blue-600">Motor Acústico</span>?
        </h1>
        <div class="grid lg:grid-cols-2 grid-cols-1 mt-[10rem] mb-[10rem] items-center">
            <div>
                <h2 class="text-3xl font-bold mb-6" data-aos="fade-up">Voces que se adaptan a <span class="text-blue-600">todas tus ideas</span></h2>
                <p class="text-xl mb-6" data-aos="fade-up">Genere voz de alta calidad en cualquier voz, estilo e idioma. Nuestro generador de voz de IA reproduce la entonación y las inflexiones humanas con una fidelidad excepcional, ajustando la entrega en función del contexto.</p>
                <a href="#" data-aos="fade-up" class="text-xl font-semibold leading-6 text-gray-900">¡Quiero generar ya! <span aria-hidden="true">&rarr;</span></a>
            </div>
            <div>
                <img data-aos="fade-up" src="assets/images/vibrant_sounds.webp" class="float-right rounded-lg" width="400" height="400" alt="Voces vibrantes">
            </div>
        </div>
        <div class="grid lg:grid-cols-2 grid-cols-1 mt-[10rem] mb-[10rem] items-center">
            <div class="relative" data-aos="fade-up">
                <img src="assets/images/universally.webp" class="rounded-lg" width="400" height="400" alt="Universally audio content">
            </div>
            <div class="relative">
                <h2 class="text-3xl font-bold mb-6" data-aos="fade-up">Hacer que el <span class="text-blue-600"> contenido sea universalmente </span> accesible</h2>
                <p class="text-xl mb-6" data-aos="fade-up">
                    Desde el texto a la voz hasta el doblaje con IA, nuestras herramientas cierran las brechas lingüísticas, restauran las voces de aquellos que las han perdido y hacen que las interacciones digitales se sientan más humanas, transformando la forma en que nos conectamos en línea.
                </p>
                <a href="#" data-aos="fade-up" class="text-xl font-semibold leading-6 text-gray-900">Acerca más a tus clientes <span aria-hidden="true">&rarr;</span></a>
            </div>
        </div>
        <div class="grid lg:grid-cols-2 grid-cols-1 mt-[10rem] mb-[10rem] items-center">
            <div class="relative">
                <h2 data-aos="fade-up" class="text-3xl font-bold mb-6"><span class="text-blue-600">Conjunto completo</span> de herramientas de IA de voz</h2>
                <p class="text-xl mb-6" data-aos="fade-up">
                    Mejore la creación de contenido, la retención de usuarios y las interacciones con los clientes con nuestro generador de voz de IA y herramientas de audio realistas y de baja latencia, diseñados para usuarios cotidianos, profesionales y empresas.
                </p>
                <a href="#" class="text-xl font-semibold leading-6 text-gray-900">Obtén acceso gratuitamente <span aria-hidden="true">&rarr;</span></a>
            </div>
            <div class="relative" data-aos="fade-up">
                <img src="assets/images/complete_voice.jpeg" class="float-right rounded-lg" width="400" height="400" alt="Complete AI Toolset for audio generation">
            </div>
        </div>
        <div class="grid lg:grid-cols-2 grid-cols-1 mt-[10rem] mb-[10rem] items-center">
            <div class="relative" data-aos="fade-up">
                <img src="assets/images/safety.jpeg" class="rounded-lg" width="400" height="400" alt="AI Safety">
            </div>
            <div class="relative" data-aos="fade-up">
                <h2 class="text-3xl font-bold mb-6">La <span class="text-blue-600">seguridad</span> de la <span class="text-blue-600">IA</span> en Koe</h2>
                <p class="text-xl mb-6">
                    El audio con IA impulsa la creatividad, la productividad y la accesibilidad. Nuestro objetivo es crear productos seguros y fiables que impulsen la innovación y ayuden a superar las barreras de comunicación.
                </p>
                <a href="#" class="text-xl font-semibold leading-6 text-gray-900">Aprende como nuestros productos son seguros <span aria-hidden="true">&rarr;</span></a>
            </div>
        </div>
    </section>
    <section class="pb-14 bg-blue-700">
    <div class="gallery">
        <div class="px-11 pt-10">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="white" class="size-10">
                <path stroke-linecap="round" stroke-linejoin="round" d="M20.25 8.511c.884.284 1.5 1.128 1.5 2.097v4.286c0 1.136-.847 2.1-1.98 2.193-.34.027-.68.052-1.02.072v3.091l-3-3c-1.354 0-2.694-.055-4.02-.163a2.115 2.115 0 0 1-.825-.242m9.345-8.334a2.126 2.126 0 0 0-.476-.095 48.64 48.64 0 0 0-8.048 0c-1.131.094-1.976 1.057-1.976 2.192v4.286c0 .837.46 1.58 1.155 1.951m9.345-8.334V6.637c0-1.621-1.152-3.026-2.76-3.235A48.455 48.455 0 0 0 11.25 3c-2.115 0-4.198.137-6.24.402-1.608.209-2.76 1.614-2.76 3.235v6.226c0 1.621 1.152 3.026 2.76 3.235.577.075 1.157.14 1.74.194V21l4.155-4.155" />
            </svg>
            <h1 class="text-3xl text-left text-white font-bold mb-10 mt-6">Testimonios</h1>
            <div class="float-right inline">
                <button action="prev" class="border rounded-full p-4">
                    <svg action="prev" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="white" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5 8.25 12l7.5-7.5" />
                    </svg>
                </button>
                <button action="next" class="border rounded-full p-4 ml-3">
                    <svg action="next" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="white" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                    </svg>
                </button>
            </div>
        </div>

    <div class="content-area w-full overflow-hidden">
        <div class="platform shadow-xl h-full flex">
        <div class="each-frame border-box flex-none h-full">
            <div class="grid lg:grid-cols-3 grid-cols-1 text-white mx-11 items-center">
                    <div class="relative">
                        <img src="assets/images/sebas.jpg" class="rounded-full object-cover h-[400px] w-[400px]" alt="Complete AI Toolset for audio generation">
                    </div>
                    <div class="col-span-2 relative">
                        <p class="text-xl mb-6 font-bold">"Koe me ha permitido transformar la producción de mis proyectos. Las voces generadas suenan tan naturales que mis clientes no pueden notar la diferencia entre una voz humana y la creada por IA. ¡Es simplemente impresionante!"</p>
                        <h4 class="text-lg">Sebastian Ramos</h4>
                        <h5 class="text-lg italic">Desarrollador de Software</h5>
                    </div>
                </div>
        </div>

        <div class="each-frame border-box flex-none h-full">
            <div class="grid lg:grid-cols-3 grid-cols-1 text-white mx-11 items-center">
                    <div class="relative">
                        <img src="assets/images/ambar.png" class="rounded-full object-cover h-[400px] w-[400px]" alt="Complete AI Toolset for audio generation">
                    </div>
                    <div class="col-span-2 relative">
                        <p class="text-xl mb-6 font-bold">"Nuestra campaña necesitaba voces auténticas que pudieran conectar emocionalmente con la audiencia, y Koe entregó exactamente eso. Las inflexiones y entonaciones son tan precisas que el resultado fue perfecto para nuestros anuncios."</p>
                        <h4 class="text-lg">Ambar P</h4>
                        <h5 class="text-lg italic">Productora Audiovisual</h5>
                    </div>
                </div>
        </div>

        <div class="each-frame border-box flex-none h-full">
            <div class="grid lg:grid-cols-3 grid-cols-1 text-white mx-11 items-center">
                <div class="relative">
                    <img src="assets/images/karina.webp" class="rounded-full object-cover h-[400px] w-[400px]" width="400" height="400" alt="Complete AI Toolset for audio generation">
                </div>
                <div class="col-span-2 relative">
                    <p class="text-xl mb-6 font-bold">"Koe no solo simplificó la creación de contenido en mi aplicación, sino que también hizo posible que personas con dificultades para leer tuvieran acceso a nuestra información. La calidad de las voces es insuperable y ha transformado la experiencia de los usuarios."</p>
                    <h4 class="text-lg">Karina S</h4>
                    <h5 class="text-lg italic">Emprendedora Digital</h5>
                </div>
            </div>
        </div>

        <div class="each-frame border-box flex-none h-full">
            <div class="grid lg:grid-cols-3 grid-cols-1 text-white mx-11 items-center">
                <div class="relative">
                    <img src="assets/images/laysha.jpeg" class="rounded-full object-cover h-[400px] w-[400px]" width="400" height="400" alt="Complete AI Toolset for audio generation">
                </div>
                <div class="col-span-2 relative">
                    <p class="text-xl mb-6 font-bold">"Gracias a Koe, pude lanzar mi aplicación en múltiples idiomas sin necesidad de contratar locutores. La calidad de las voces es increíble y la plataforma es fácil de usar. ¡Recomiendo esta herramienta a cualquier emprendedor que quiera expandir su alcance!"</p>
                    <h4 class="text-lg">Laysha E.</h4>
                    <h5 class="text-lg italic">Directora de Marketing</h5>
                </div>
            </div>
        </div>


            </div>
        </div>
    </div>
    
    </section>
    <section class="mt-10 pb-10 mx-11">
        <div class="flex justify-center mb-2" data-aos="fade-up">
            <svg xmlns="http://www.w3.org/2000/svg"  fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="#1E52DC" class="size-10">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v12m-3-2.818.879.659c1.171.879 3.07.879 4.242 0 1.172-.879 1.172-2.303 0-3.182C13.536 12.219 12.768 12 12 12c-.725 0-1.45-.22-2.003-.659-1.106-.879-1.106-2.303 0-3.182s2.9-.879 4.006 0l.415.33M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
            </svg>
        </div>
        <h1 class="text-3xl text-center font-bold mb-4" data-aos="fade-up">Precios</h1>
        <p class="text-xl mb-16 text-center" data-aos="fade-up">Los planes superiores incluyen los beneficios del anterior</p>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="bg-white rounded-lg shadow-lg overflow-hidden" data-aos="fade-left">
                <div class="bg-blue-600 text-white py-4 px-6">
                    <h2 class="text-2xl font-bold">Pro</h2>
                </div>
                <div class="p-6">
                    <p class="text-3xl font-bold mb-4">$29<span class="text-lg font-normal">/més</span></p>
                    <ul class="space-y-2 mb-6">
                        <li class="flex items-center">
                            <svg class="w-5 h-5 text-green-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                            100 minutos de generación de audio
                        </li>
                        <li class="flex items-center">
                            <svg class="w-5 h-5 text-green-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                            5 opciones de voz
                        </li>
                        <li class="flex items-center">
                            <svg class="w-5 h-5 text-green-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                            Herramientas de edición básica
                        </li>
                    </ul>
                    <button class="w-full bg-blue-600 text-white py-2 px-4 rounded-lg hover:bg-blue-700 transition duration-200">Elegir Pro</button>
                </div>
            </div>

            <div class="bg-white rounded-lg shadow-lg overflow-hidden" data-aos="fade-up">
                <div class="bg-blue-700 text-white py-4 px-6">
                    <h2 class="text-2xl font-bold">Max</h2>
                </div>
                <div class="p-6">
                    <p class="text-3xl font-bold mb-4">$59<span class="text-lg font-normal">/més</span></p>
                    <ul class="space-y-2 mb-6">
                        <li class="flex items-center">
                            <svg class="w-5 h-5 text-green-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                            300 minutos de generación de audio
                        </li>
                        <li class="flex items-center">
                            <svg class="w-5 h-5 text-green-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                            2000+ opciones de voz
                        </li>
                        <li class="flex items-center">
                            <svg class="w-5 h-5 text-green-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                            Clonación de voz rápida
                        </li>
                        <li class="flex items-center">
                            <svg class="w-5 h-5 text-green-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                            Herramientas de edición avanzadas
                        </li>
                        <li class="flex items-center">
                            <svg class="w-5 h-5 text-green-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                            Soporte de Prioridad
                        </li>
                    </ul>
                    <button class="w-full bg-blue-700 text-white py-2 px-4 rounded-lg hover:bg-blue-700 transition duration-200">Elegir Max</button>
                </div>
            </div>

            <div class="bg-white rounded-lg shadow-lg overflow-hidden" data-aos="fade-right">
                <div class="bg-blue-800 text-white py-4 px-6">
                    <h2 class="text-2xl font-bold">Ultra</h2>
                </div>
                <div class="p-6">
                    <p class="text-3xl font-bold mb-4">$99<span class="text-lg font-normal">/més</span></p>
                    <ul class="space-y-2 mb-6">
                        <li class="flex items-center">
                            <svg class="w-5 h-5 text-green-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                            Generación de audio ilimitada
                        </li>
                        <li class="flex items-center">
                            <svg class="w-5 h-5 text-green-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                            16000+ opciones de voz
                        </li>
                        <li class="flex items-center">
                            <svg class="w-5 h-5 text-green-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                            Suite de edición profesional
                        </li>
                        <li class="flex items-center">
                            <svg class="w-5 h-5 text-green-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                            Clonación profesional con solo 12 segundos de audio
                        </li>
                        <li class="flex items-center">
                            <svg class="w-5 h-5 text-green-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                            Soporte 24/7 premium
                        </li>
                        <li class="flex items-center">
                            <svg class="w-5 h-5 text-green-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                            Acceso a API
                        </li>
                    </ul>
                    <button class="w-full bg-blue-800 text-white py-2 px-4 rounded-lg hover:bg-blue-800 transition duration-200">Elegir Ultra</button>
                </div>
            </div>
        </div>
    </section>
    <?php
        include 'footer.php';
    ?>
</body>
</html>

<script src="assets/js/aos.min.js"></script>
<script>
  AOS.init({disable: 'mobile'});

  document.querySelector(".gallery").style.width = document.body.clientWidth + 'px';
  function gallery(){
              this.index=0;
              this.load=function(){
                this.rootEl = document.querySelector(".gallery");
                this.platform = this.rootEl.querySelector(".platform");
                this.frames = this.platform.querySelectorAll(".each-frame");
                this.contentArea = this.rootEl.querySelector(".content-area");      
                this.width = parseInt(this.rootEl.style.width);
                this.limit = {start:0,end:this.frames.length-1};
                this.frames.forEach(each=>{each.style.width=this.width+"px";});   
                this.goto(this.index);      
              }
              this.next = function(){this.platform.style.right=this.width * ++this.index + "px";}
              this.prev = function(){this.platform.style.right=this.width * --this.index + "px";}
              this.goto = function(index){this.platform.style.right = this.width * index + "px";this.index=index;}
              this.load();
          }
          var G = new gallery();
            G.rootEl.addEventListener("click",function(t){
                var val = t.target.getAttribute("action");
                if(val == "next" && G.index != G.limit.end){G.next();}
                if(val == "prev" && G.index != G.limit.start){G.prev();}
                if(val == "goto"){
                    let rv = t.target.getAttribute("goto");
                    rv = rv == "end" ? G.limit.end:rv;
                    G.goto(parseInt(rv));
                }
            });
            document.addEventListener("keyup",function(t){
                var val = t.keyCode;
                if(val == 39 && G.index != G.limit.end){G.next();}
                if(val == 37 && G.index != G.limit.start){G.prev();}
            });

            // run G.load() if new data loaded with ajax


</script>