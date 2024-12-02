<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/output.css">
</head>

<body class="bg-gray-100">

    <nav class="flex flex-col  justify-center items-center bg-blue-600 p-3 text-white text-lg md:flex-row md:justify-between">
        <div class="flex flex-col justify-center content-center lg:gap-10 lg:flex-row">

            <img src="" alt="logo motoya">

        </div>

        <div>
            <h1 class="text-center uppercase md:text-2xl mt-5">Administracion Motoya</h1>

        </div>

        <div class="flex flex-col items-center justify-center">
            <?php

            session_start();
            if (isset($_SESSION['login']) && ($_SESSION['login'] === true)) {
            ?>
                <div class="hidden md:block">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" width="60" height="60" stroke-width="3">
                        <path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0"></path>
                        <path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2"></path>
                    </svg>
                </div>
                <div class="-mt-2 mb-2">
                    <p class="text-sm"> <?php echo $_SESSION['nombre']; ?></p>
                </div>


            <?php
            }
            ?>
            <div class="hover:scale-110">
                <?php
                if (isset($_SESSION['login']) && ($_SESSION['login'] === true)) {
                    if (isset($crud)) {
                        echo '<a href="../logout.php">cerrar cesion</a>';
                    }else{
                        echo '<a href="./logout.php">cerrar cesion</a>';
                    }
                    
                    
                }
                ?>
            </div>

        </div>

    </nav>

    <?php
    if (!isset($_SESSION['login']) && (!isset($login) === true)) {
        exit;
    }
