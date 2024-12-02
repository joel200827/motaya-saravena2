<?php $contacto = true;
include './includes/header.php'; ?>

<div class="container  mx-auto mt-0 bg-gradient-to-t from-gray-100 to-gray-200 py-5 md:py-20">
    <main>
        <h1 class="text-center text-xl md:text-3xl uppercase">Contactanos</h1>
        <div class="container md:w-5/6 lg:w-4/6 w-[95%] mx-auto bg-white p-10 md:mt-20 mt-5 shadow-2xl rounded-xl">

            <form class=" shadow-lg rounded-lg md:p-10 bg-opacity-70 ">
                <fieldset>
                    <legend class="text-center  uppercase md:text-xl">Digite todos sus datos </legend>
                    <div class="mt-10">
                        <div class="flex gap-5 w-full items-center">
                            <label class="w-1/4 text-end font-bold" for="nombre">Nombre</label>
                            <input type="text" name="nombre"
                                class="w-full p-2 bg-transparent focus:border-0 focus:outline-none focus:border-b-2 border-b-2 border-gray-400 focus:border-gray-500 placeholder-gray-300 placeholder:capitalize text-gray-100 text-xl placeholder:text-[16px]"
                                placeholder="digite nombre completo" required autofocus>
                        </div>
                        <div class="flex gap-5 w-full mt-10">
                            <label class="w-1/4 text-end font-bold" for="tel">Telefono</label>
                            <input type="text" name="tel" id="tel" placeholder="+57 3xxxxxx"
                                class="w-full p-2 bg-transparent focus:border-0 focus:outline-none focus:border-b-2 border-b-2 border-gray-400 focus:border-gray-500 placeholder-gray-300 text-xl placeholder:text-[16px] text-gray-100">
                        </div>
                        <div class="flex gap-5 w-full mt-10">
                            <label class="w-1/4 text-end font-bold" for="email">Email</label>
                            <input type="email" name="email" id="email" placeholder="correo@correo.com"
                                class="w-full p-2 bg-transparent focus:border-0 focus:outline-none focus:border-b-4 border-b-2 border-gray-400 focus:border-gray-500 placeholder-gray-300 text-xl text-gray-100 placeholder:text-[16px]">
                        </div>

                        <div class="flex gap-5 w-full mt-10">
                            <label class="w-1/4 text-end font-bold" for="men">Mensaje</label>
                            <textarea name="mensaje" id="men"
                                class="w-full min-h-52 bg-white border-2 rounded-sm text-xl text-gray-700 focus:outline-none p-2"></textarea>
                        </div>
                    </div>


                    <div class="w-full mt-10 flex justify-end  ">
                        <input type="submit" class="uppercase font-bold w-1/3 bg-orange-500 p-2 rounded-md text-xl"
                            value="Enviar">

                    </div>

                </fieldset>
            </form>
        </div>




    </main>

    <div class="md:flex mt-20 gap-8 md:px-10">

        <div id="map" class="h-[400px] md:w-5/6">

        </div>

        <div
            class="bg-orange-100 py-3 mt-5 md:mt-0 md:w-1/2 text-xl rounded-md font-bold flex flex-col items-center justify-center mx-10 md:mx-0">
            <h3 class="text-center font-bold uppercase mb-5">llegar a nosotros</h3>
            <div class="flex items-center gap-3">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 32 32" stroke-width="1.5"
                    stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1 1 15 0Z" />
                </svg>
                <div>
                    <p>calle 25 # 15-89 </p>
                    <p>Saravena-Arauca </p>
                </div>


            </div>
            <div class="flex mt-10">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 32 32  " stroke-width="1.5"
                    stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1 1 15 0Z" />
                </svg>

                <p>contacto@motoya.com</p>

            </div>
            <div class="flex mt-10">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 32 32" stroke-width="1.5"
                    stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1 1 15 0Z" />
                </svg>

                <p>93-725-1290956</p>

            </div>
            <div class="flex mt-10">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 32 32" stroke-width="1.5"
                    stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1 1 15 0Z" />
                </svg>

                <p>@motoyasaravena</p>

            </div>

        </div>

    </div>

</div>


<a href=" https://api.whatsapp.com/send?phone=573006543487&amp;text= Desde Sitio Web Motoya" target="_blank"

    class=" text-white bg-green-600 p-3 fixed  bottom-28 md:bottom-10 right-2 rounded-full  hover:-rotate-45 hover:bg-opacity-45">

    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
        stroke-linecap="round" stroke-linejoin="round" width="48" height="48" stroke-width="2">
        <path d="M3 21l1.65 -3.8a9 9 0 1 1 3.4 2.9l-5.05 .9"></path>
        <path d="M9 10a.5 .5 0 0 0 1 0v-1a.5 .5 0 0 0 -1 0v1a5 5 0 0 0 5 5h1a.5 .5 0 0 0 0 -1h-1a.5 .5 0 0 0 0 1">
        </path>
    </svg>
</a>



<script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
<script>
    var map = L.map('map').setView([6.954557441406746, -71.87568494868279], 16);

    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
    }).addTo(map);

    L.marker([6.954557441406746, -71.87568494868279]).addTo(map)
        .bindPopup('Motoya')
        .openPopup();
</script>


<?php include './includes/footer.php' ?>