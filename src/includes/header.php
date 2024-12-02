<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto-Motoya</title>
    <link rel="stylesheet" href="../../output.css">
    <?php echo isset($contacto) ? ' <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />' : '';

    ?>

</head>

<body class="bg-gray-100">

    <?php
    if (isset($index)) {
    ?>
        <header class="bg-[url('../img/hero.jpg')] bg-cover bg-center h-[600px] relative flex flex-col">
            <div class="bg-black bg-opacity-75 w-full h-full absolute">
                <div class="flex justify-between text-center gap-10 p-5">
                    <a href="/" class="w-1/4">
                        <img src="../img/logo.png" alt="Logotipo de MotosYa" class="w-full">
                        <p class="text-white uppercase text-2xl -mt-12">motoya-saravena</p>
                    </a>


                    <?php include './includes/navbar.php' ?>
                </div>

                <div class="mt-32">
                    <h1 id="titulo" class="text-white text-center uppercase text-3xl md:text-5xl font-extrabold">Compra y
                        venta de
                        motos </h1>
                </div>
            </div>

        </header>
    <?php
    } else {
    ?>


        <div class="flex justify-between text-center gap-10 bg-gray-800">
            <a href="../src/index.php" class="w-1/12 p-2">
                <img src="../../img/logo.png" alt="Logotipo de MotosYa" class="w-full">
                <p class="text-white uppercase text-xs -mt-6">motoya-saravena</p>
            </a>


            <?php include './includes/navbar.php' ?>
        </div>

    <?php
    }

    ?>