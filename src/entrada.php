<?php $entrada = false;

$id = $_GET['id'];
$id = filter_var($id, FILTER_VALIDATE_INT);


if (!$id) {
    header('Location: ./blog.php');
}
try {
    require '../conexiones/conexion_bd.php';

    $sql = "SELECT * FROM blog WHERE idblog=$id;";
    $consulta = mysqli_query($coneccion, $sql);
    $entrada = mysqli_fetch_assoc($consulta);
    
} catch (\Throwable $th) {
    echo $th;
}


include './includes/header.php';
?>
<main class="w-5/6 mx-auto mt-5 h-auto">
    <div>
        <header class="">
            <h1 class="uppercase font-bold text-2xl text-center"><?php echo $entrada['titulo']; ?> </h1>
            <p class="md:leading-7 lg:leading-8 py-3"><?php echo $entrada['parrafo']; ?></p>
        </header>



        <figure class="h-96 object-center mb-20">

            <img src="../blog/<?php echo $entrada['imagen']; ?>" alt="Moto recomendada para principiantes"
                class="object-cover h-full w-full object-center rounded-lg" />
            <figcaption class="text-xs md:text-base"><?php echo $entrada['pieImagen']; ?></figcaption>
        </figure>

        <body class="leading-8">
            <p>
                <?php echo $entrada['contenido']; ?>
            </p>
        </body>


    </div>



    <footer class="mt-10 flex flex-col items-end justify-end">
        <p class="uppercase font-bold">
            autor: <span class="capitalize text-indigo-900 underline">
                <a href="#"><?php

                            echo $entrada['autor']; ?>
                </a>
            </span>
        </p>
        <p class="uppercase font-bold">
            fecha: <span class="capitalize text-indigo-900 ">
                <?php

                echo date('d-M-Y', strtotime($entrada['fecha'])); ?>

            </span>
        </p>
    </footer>
</main>


<?php include './includes/footer.php' ?>