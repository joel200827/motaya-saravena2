<?php $index = true;
try {
    require '../conexiones/conexion_bd.php';

    $sql = "SELECT CONCAT(mo.nombre,' ', ma.nombre,' ',mo.modelo)as moto, mo.imagen, mo.precio, mo.documentos, mo.km, mo.encendido, mo.colores, mo.cilindraje, mo.reseña FROM motos mo INNER JOIN marcas ma ON mo.marca = ma.idmarcas LIMIT 3 ;";

    $consulta = mysqli_query($coneccion, $sql);

    $sql2 = "SELECT * FROM blog ORDER BY idblog ASC LIMIT 2;";
    $query = mysqli_query($coneccion, $sql2);
} catch (\Throwable $th) {
    echo $th;
}
include './includes/header.php';
?>

<main class="p-7">
    <h2 class="text-center text-xl md:text-4xl md:p-10 font-bold">Más Sobre Nosotros</h2>

    <div class="md:grid grid-cols-3 gap-10 mt-8 mx-auto">
        <div class="grid grid-cols-3 gap-3 md:gap-0 md:flex flex-col items-center text-start px-5 md:px-0">
            <div class="col-span-1 md:w-1/3 mx-auto ">
                <img src="../img/calidad.svg" alt="Icono de calidad" class="w-full">
            </div>

            <div class="col-span-2">
                <h4 class="md:text-center text-xl font-bold pt-5 pb-2 capitalize">calidad</h4>
                <p>
                    En motoya saravena, la calidad es nuestra prioridad principal. Nos comprometemos a ofrecer solo
                    las mejores motos del mercado, cada una de ellas cuidadosamente inspeccionada por nuestros
                    expertos para garantizar que cumplan con los más altos estándares de rendimiento y seguridad.
                    Creemos que nuestros clientes merecen lo mejor, por eso nos esforzamos en cada detalle, desde la
                    selección hasta la entrega final.
                </p>
            </div>

        </div>
        <div
            class="grid grid-cols-3 gap-3 md:gap-0 md:flex flex-col items-center text-start px-5 md:px-0 mt-7 md:mt-0">
            <div class="col-span-1 md:w-1/3 mx-auto">
                <img src="../img/money.svg" alt="Icono Precio" class="w-full">
            </div>
            <div class="col-span-2">
                <h4 class="md:text-center text-xl font-bold pt-5 pb-2 capitalize">Precio</h4>
                <p>Entendemos que el precio es un factor crucial en la decisión de compra de una moto. Es por eso
                    que trabajamos arduamente para ofrecer precios competitivos y justos, sin comprometer la
                    calidad. Nuestra misión es proporcionar motos de alta calidad a precios accesibles,
                    asegurándonos de que cada cliente encuentre una opción que se ajuste a su presupuesto. Con
                    nosotros, obtendrás la mejor relación calidad-precio del mercado.
                </p>
            </div>

        </div>

        <div
            class="grid grid-cols-3 gap-3 md:gap-0 md:flex flex-col items-center text-start px-5 md:px-0 mt-7 md:mt-0">
            <div class="col-span-1 md:w-1/3 mx-auto">
                <img src="../img/clock.svg" alt="Icono Tiempo">
            </div>
            <div class="col-span-2">
                <h4 class="md:text-center text-xl font-bold pt-5 pb-2 capitalize">rapidez</h4>
                <p>Valoramos tu tiempo y sabemos que la rapidez en el servicio es esencial. Nos enorgullece ofrecer
                    un proceso de compra y venta eficiente y sin complicaciones. Desde el momento en que decides
                    comprar o vender una moto con nosotros, nuestro equipo se encargará de todo de manera ágil y
                    profesional. Nos aseguramos de que tu experiencia sea rápida y satisfactoria, para que puedas
                    disfrutar de tu nueva moto lo antes posible.
                </p>
            </div>

        </div>
    </div>
</main>

<section class="container w-5/6 mx-auto">
    <h2 class="text-center text-2xl md:text-4xl p-10 font-bold capitalize">Motos en venta</h2>
    <div class="lg:grid grid-cols-3 gap-7">
        <?php while ($motos =  mysqli_fetch_assoc($consulta)) :  ?>

            <div class="flex flex-col">
                <div class="rounded-t-2xl overflow-hidden h-64 text-center flex justify-around">
                    <img src="../imagenes/<?php echo $motos['imagen']; ?>" alt="anuncio" class="object-cover h-full">
                </div>

                <div class="py-8 px-4 bg-gray-100 border-t-0 border-double border-4 border-gray-300 rounded-b-2xl">
                    <h3 class="font-bold capitalize text-xl pb-2"><?php echo $motos['moto']; ?></h3>
                    <p class=""> <?php echo $motos['reseña']; ?></p>
                    <p class="font-bold text-xl p-2 text-orange-600 mb-5"><?php echo '$ ' . number_format($motos['precio'], 0, '.', ','); ?></p>
                    <div>


                        <ul class="container flex gap-2 h-32">
                            <li class="">
                                <img class="object-cover" src="../img/VOGE 300AC__Fatbar_0.jpg.webp" alt="icono wc">
                                <p class="text-xs md:text-base">Documentos:</p>
                                <p class="text-xs md:text-base"><?php echo $motos['documentos']; ?></p>
                            </li>
                            <li>
                                <img class="object-cover" src="../img/VOGE 300AC__Llantas_0.jpg.webp" alt="">
                                <p class="text-xs md:text-base">Documentos:</p>
                                <p class="text-xs md:text-base"><?php echo $motos['km']; ?></p>
                            </li>
                            <li>
                                <img class="object-cover" src="../img/VOGE 300AC__Slipper.jpg.webp" alt="">
                                <p class="text-xs md:text-base">Encendido:</p>
                                <p class="text-xs md:text-base"><?php echo $motos['encendido']; ?></p>
                            </li>
                        </ul>
                    </div>
                    <a href="../src/moto.php"
                        class=" block text-center py-2  bg-orange-600 text-white  text-xl font-bold rounded-lg mt-10 hover:bg-orange-400 capitalize">
                        Ver moto
                    </a>
                </div>
            </div>
        <?php endwhile; ?>



    </div>


    <div class="mt-10 flex justify-end">
        <a href="#"
            class="py-2 px-5 rounded-lg bg-black text-white font-bold text-xl capitalize hover:bg-gray-600">Ver mas
            motos</a>
    </div>

</section>




<section class="bg-[url('../img/hero.jpg')] bg-cover bg-center h-[600px] mt-10 text-white text-center">
    <h2 class="text-center md:text-4xl p-10 font-extrabold capitalize mt w-1/2">Encuentra la moto de tus sueños</h2>
    <marquee direction="left" class="w-5/6 mx-auto">
        <p class="text-3xl font-semibold text-white capitalize">Llena el formulario de contacto y un asesor se
            pondrá en contacto contigo a la brevedad
        </p>
    </marquee>
    <a href="../src/contacto.php"
        class=" block mt-36 w-5/6 md:w-1/2 lg:w-1/4 mx-auto bg-orange-600 px-10 py-3 text-2xl uppercase font-semibold rounded-2xl hover:bg-orange-400 hover:scale-110 ">Contactános</a>
</section>


<section class=" w-5/6 mx-auto bg-gray-100 mt-10">

    <h2 class="text-center text-4xl p-10 font-extrabold capitalize">Nuestro Blog</h2>
    <?php while ($entrada = mysqli_fetch_assoc($query)) : ?>
        <article class="border-dotted border-b-8 pb-10 border-gray-300">
            <div class="h-[400px]">

                <img src="../blog/<?php echo $entrada["imagen"]; ?>" alt="foto de la moto" class="object-contain h-full w-full object-center rounded-lg ">

            </div>

            <div class="md:w-5/6 mx-auto mt-5">

                <h4 class="font-bold text-xl"><?php echo $entrada['titulo']; ?></h4>
                <p class="text-xs font-semibold">publicada el: <span> <?php echo date('d-M-Y', strtotime($entrada['fecha'])); ?></span> por: <span><?php echo $entrada['autor']; ?></span>
                </p>

                <p class=" mt-5">
                    <?php echo $entrada['parrafo']; ?>
                </p>
                <a href="./entrada.php?id=<?php echo $entrada['idblog']; ?>"
                    class="mt-3 block w-1/5 font-bold hover:px-3 hover:py-2 md:hover:bg-orange-600 rounded-xl">Leer
                    más...</a>
            </div>
        </article>

    <?php endwhile ?>

</section>

<section class="w-5/6 mx-auto mt-10 ">
    <h3 class="font-bold capitalize text-xl pb-2 text-center">Testimoniales</h3>

    <div class="lg:grid grid-cols-3 bg-gradient-to-b from-gray-300 to-gray-800 py-16 px-5 gap-4">

        <blockquote
            class="flex flex-col items-end bg-gradient-to-tr from-gray-200 to-gray-600 text-white p-5 rounded-xl">
            <div>
                <p>
                    Vender mi moto fue una experiencia excelente. Publicar el anuncio fue fácil y en poco tiempo
                    recibí varias ofertas. El equipo de atención al cliente me ayudó en todo momento.
                    ¡Definitivamente volveré a usar este servicio!
                </p>
            </div>
            <div class="h-32 w-1/3 rounded-full overflow-hidden mx-auto mt-5">
                <img src="../img/logo.png" alt="foto persona" class="object-cover">
            </div>
            <p class="block text-center w-full "> joel albeiro</p>
        </blockquote>
        <blockquote
            class="flex flex-col items-end bg-gradient-to-bl from-gray-200 to-gray-600 text-white p-5 rounded-xl mt-5 lg:mt-0">
            <div>
                <p>
                    Encontré la moto de mis sueños gracias a esta página. El proceso de compra fue rápido y
                    sencillo, y los vendedores eran muy profesionales. ¡Recomiendo este sitio a todos los amantes de
                    las motos
                </p>

            </div>
            <div class="h-32 w-1/3 rounded-full overflow-hidden mx-auto mt-5">
                <img src="../img/logo.png" alt="foto persona" class="object-cover">
            </div>
            <p class="block text-center w-full "> joel albeiro</p>
        </blockquote>
        <blockquote
            class="flex flex-col items-end bg-gray-800 text-white p-5 rounded-xl bg-gradient-to-t from-gray-200 to-gray-600 mt-5 lg:mt-0">
            <div>
                <p>
                    La variedad de motos disponibles es impresionante. Pude comparar diferentes modelos y precios
                    antes de tomar una decisión. Además, las descripciones y fotos de los anuncios eran muy
                    detalladas. ¡Una experiencia de compra fantástica!
                </p>

            </div>
            <div class="h-32 w-1/3 rounded-full overflow-hidden mx-auto mt-5">
                <img src="../img/logo.png" alt="foto persona" class="object-cover">
            </div>
            <p class="block text-center w-full "> joel albeiro</p>
        </blockquote>

    </div>
</section>


<?php include './includes/footer.php' ?>