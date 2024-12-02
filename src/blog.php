<?php
try {
    require '../conexiones/conexion_bd.php';

    $sql = "SELECT * FROM blog ORDER BY idblog ASC;";

    $consulta = mysqli_query($coneccion, $sql);
    $entrada1 = mysqli_fetch_assoc($consulta);
} catch (\Throwable $th) {
    echo $th;
}

include './includes/header.php'; ?>

<div class="container md:w-5/6 mx-auto px-5 md:px-0 mb-16">
    <h1 class="text-center uppercase text-xl md:text-2xl py-4 font-bold">Blog de Motos <br> <span
            class="text-base md:text-xl font-semibold"> Guías, Reseñas y Tendencias del Sector
        </span>
    </h1>
    <article class="mt-10 border-b-4 pb-8 border-double border-gray-950">
        <div class="flex flex-col-reverse md:flex-row gap-5 md:h-64 lg:h-60">
            <header class="md:w-1/2 lg:w-1/3">
                <h2 class="capitalize font-bold text-xl"><?php echo $entrada1['titulo']; ?></h2>
                <p class="md:leading-7 lg:leading-8 py-3"> <?php echo $entrada1['parrafo']; ?></p>
            </header>
            <figure class="md:w-1/2 lg:w-2/3 h-auto ">
                <img src="../blog/<?php echo $entrada1['imagen']; ?>" alt="Moto recomendada para principiantes"
                    class="object-cover h-full w-full object-center rounded-lg" />
                <figcaption class="text-xs md:text-base"><?php echo $entrada1['pieImagen']; ?></figcaption>
            </figure>
        </div>
        <footer>
            <a href="./entrada.php?id=<?php echo $entrada1['idblog']; ?>" class="text-xl font-bold hover:px-3 hover:py-2 hover:bg-orange-600 rounded-xl">Leer
                más...</a>
        </footer>
    </article>

    <div class="md:grid grid-cols-2 gap-10">
        <?php while ($entrada = mysqli_fetch_assoc($consulta)) :;
        ?>
            <article class="mt-16 flex flex-col justify-between border-b-4 pb-8 border-double border-gray-950">
                <header>
                    <h2 class="font-bold"><?php echo $entrada['titulo']; ?></h2>
                    <p class="excerpt">"<?php echo $entrada['parrafo']; ?></p>
                </header>
                <figure>
                    <img src="../blog/<?php echo $entrada['imagen']; ?>" alt="Las mejores motos de 2024" class="w-full h-56 object-cover object-center rounded-md mt-2" />
                    <figcaption><?php echo $entrada['pieImagen']; ?></figcaption>
                </figure>
                <footer>
                    <a href="./entrada.php?id=<?php echo $entrada['idblog']; ?>" class="text-xl font-bold hover:px-3 hover:py-2 hover:bg-orange-600 rounded-xl">Leer
                        más...</a>
                </footer>
            </article>
        <?php endwhile ?>

    </div>




</div>

<?php include './includes/footer.php' ?>