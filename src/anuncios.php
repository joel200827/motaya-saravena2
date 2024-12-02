<?php
try {
    require '../conexiones/conexion_bd.php';

    $sql = "SELECT CONCAT(mo.nombre,' ', ma.nombre,' ',mo.modelo)as moto, mo.imagen, mo.precio, mo.documentos, mo.km, mo.encendido, mo.colores, mo.cilindraje, mo.reseña FROM motos mo INNER JOIN marcas ma ON mo.marca = ma.idmarcas;";


    $consulta = mysqli_query($coneccion, $sql);
} catch (\Throwable $th) {
    echo $th;
}

include './includes/header.php'; ?>
<h1 class="text-center uppercase text-xl md:text-2xl py-4 font-bold">Explora Nuestra Selección de Motos en Venta</h1>

<section class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 p-6">
    <?php while ($motos =  mysqli_fetch_assoc($consulta)) :  ?>
        <div class="bg-white border rounded-lg shadow-md overflow-hidden hover:scale-105 transform transition-all">
            <div class="relative">
                <img src="../imagenes/<?php echo $motos['imagen'];?>" alt="Moto 1" class="w-full h-56 object-cover">
            </div>
            <div class="flex justify-between p-3">
                <div class="flex gap-2 justify-between mx-auto">
                    <img src="../img/anuncio1.jpg" alt="Moto 1 Vista 1" class="w-16 h-16 object-cover rounded-md">
                    <img src="../img/anuncio1.jpg" alt="Moto 1 Vista 2" class="w-16 h-16 object-cover rounded-md">
                    <img src="../img/anuncio1.jpg" alt="Moto 1 Vista 3" class="w-16 h-16 object-cover rounded-md">
                </div>
            </div>
            <div class="p-4">
                <h3 class="text-xl font-semibold text-gray-800"><?php echo $motos['moto']; ?></h3>
                <p class="text-lg text-red-600 font-bold mt-2"><?php echo '$'. number_format($motos['precio'],2,);  ?></p>
                <a href="../src/moto.php" class="text-blue-600 hover:text-blue-800 mt-3 inline-block font-semibold">Ver detalles</a>
            </div>
        </div>

    <?php endwhile ?>

</section>

<?php include './includes/footer.php' ?>