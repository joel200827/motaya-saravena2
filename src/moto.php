<?php include './includes/header.php'; ?>


<div class="container lg:w-5/6  mx-auto">
    <h1 class="text-center text-3xl p-5 font-bold text-white"> CB 500 HONDA</h1>
    <div class="relative my-10">
        <div class="w-full carrousel hidden">
            <img src="../img/anuncio1.jpg" alt="foto de moto" class="lg:object-cover w-full h-80 lg:h-[30rem] rounded-xl">
        </div>
        <div class="w-full carrousel hidden">
            <img src="../img/hero.jpg" alt="foto de moto" class="lg:object-cover w-full  h-80 lg:h-[30rem] rounded-xl">
        </div>
        <div class="w-full carrousel hidden">
            <img src="../img/logo2.png" alt="foto de moto" class="lg:object-cover w-full  h-auto lg:h-[30rem] rounded-xl">
        </div>

        <button id="btnAnterior"
            class="hidden md:inline absolute top-1/2 left-0 text-white bg-orange-600 p-2 rounded-se-2xl rounded-ee-2xl bg-opacity-60 hover:bg-opacity-100">
            <svg class="hover:scale-125" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" width="48" height="48"
                stroke-width="3">
                <path
                    d="M12 15v3.586a1 1 0 0 1 -1.707 .707l-6.586 -6.586a1 1 0 0 1 0 -1.414l6.586 -6.586a1 1 0 0 1 1.707 .707v3.586h3v6h-3z">
                </path>
                <path d="M21 15v-6"></path>
                <path d="M18 15v-6"></path>
            </svg>
        </button>

        <button id="btnSiguiente"
            class="hidden md:inline absolute top-1/2 right-0 text-white bg-orange-600 p-2 rounded-ss-2xl rounded-es-2xl bg-opacity-60 hover:bg-opacity-100">
            <svg class="hover:scale-125" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" width="48" height="48"
                stroke-width="3">
                <path
                    d="M12 9v-3.586a1 1 0 0 1 1.707 -.707l6.586 6.586a1 1 0 0 1 0 1.414l-6.586 6.586a1 1 0 0 1 -1.707 -.707v-3.586h-3v-6h3z">
                </path>
                <path d="M3 9v6"></path>
                <path d="M6 9v6"></path>
            </svg>

        </button>

    </div>

    <div class="bg-gradient-to-b  from-gray-50 to-gray-200 p-10  shadow-lg rounded-lg pb-10 mb-10">
        <h2 class=" font-bold text-xl md:text-2xl uppercase py-5">caracteristicas</h2>
        <div>
            <ul>
                <li class="p-2"><span class="font-bold capitalize">Motor bicilíndrico en línea:</span> Potencia de 47 HP a 8,600 RPM y torque máximo de 43 Nm a 6,500 RPM.</li>
                <li class="p-2"><span class="font-bold capitalize">Refrigeración líquida:</span> Mantiene el motor a una temperatura óptima, incluso en condiciones de alta demanda.</li>
                <li class="p-2"><span class="font-bold capitalize">Suspensión invertida SHOWA SFF-BP:</span> Ofrece un control preciso y una conducción cómoda en cualquier terreno.</li>
                <li class="p-2"><span class="font-bold capitalize">Doble disco frontal con pinzas Nissin de doble pistón:</span> Mejora la seguridad y la capacidad de frenado.</li>
                <li class="p-2"><span class="font-bold capitalize">Iluminación full LED optimizada:</span> Mejora la visibilidad nocturna y la seguridad en la conducción.</li>
                <li class="p-2"><span class="font-bold capitalize">Transmisión de 6 velocidades:</span> Proporciona una respuesta ágil y eficiente del motor.</li>
                <li class="p-2"><span class="font-bold capitalize">Ergonomía y diseño Naked:</span> Diseño deportivo y cómodo, ideal para largas distancias y conducción diaria.</li>
            </ul>

        </div>
        <div class="mt-5">
            <p class="text-xl font-bold ">Precio</p>
            <p class="text-3xl font-bold text-orange-600">$39.590.000</p>
        </div>
        <div class="mt-10 text-justify ">
            <h2 class="font-bold text-xl md:text-2xl uppercase py-5">Reseña de la Honda CB 500</h2>
            <p>La Honda CB 500 es una moto versátil y potente, ideal tanto para principiantes como para conductores experimentados. Su motor bicilíndrico en línea ofrece una potencia equilibrada y eficiente, mientras que su refrigeración líquida garantiza un rendimiento constante. La suspensión invertida SHOWA SFF-BP proporciona una conducción suave y controlada, y el sistema de frenos doble disco frontal asegura una detención segura y efectiva. Con su diseño Naked y ergonomía cómoda, la CB 500 es perfecta para desplazamientos diarios y aventuras fuera de la carretera. Además, su iluminación full LED optimizada mejora la visibilidad nocturna, lo que la convierte en una opción segura y confiable.
            </p>
        </div>

    </div>
</div>
<script src="../js/slide.js"></script>