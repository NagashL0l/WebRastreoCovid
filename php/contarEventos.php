<?php
    include_once "conexion.php";
    header('Content-Type: text/txt; charset=utf-8');

    $sql = "SELECT * FROM 'CASO'";
    $pdo = $conexion->prepare($sql);

    $número_filas = mysql_num_rows($sql);
    echo $número_filas; 
?>