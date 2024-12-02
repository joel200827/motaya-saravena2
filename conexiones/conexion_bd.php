<?php
try {
    $servidor = 'localhost';
    $usuario = 'root';
    $passwords = '1115726301';
    $bd = 'motoya';

    $coneccion = mysqli_connect($servidor, $usuario, $passwords, $bd);
    

} catch (\Throwable $th) {
    var_dump($th);
}
