<?php
    $dir = '127.0.0.1';

    $conexion = mysqli_connect($dir, 'agenciero', 'agenciero', 'agencia');

    if(isset($conexion)){
        echo 'La base de datos esta conectada';
    }
?>