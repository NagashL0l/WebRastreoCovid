<?php

    include_once "php/conexion.php";
    header('Content-Type: text/txt; charset=utf-8');

    session_start();

    if(isset($_GET['dniUser']) && isset($_GET['pass'])){
        $conexion = (new Conexion())->conectar();
        $parametros = array(':dniUser'=>$_GET['dniUser'], ':pass'=>$_GET['pass']);

        $sql = "SELECT Dni FROM `ADMINISTRADOR` WHERE Dni = :dniUser AND Pass = :pass";

        $pdo = $conexion->prepare($sql);
        $pdo->execute($parametros);

        while ($row=$pdo->fetch(PDO::FETCH_ASSOC)){
            $_SESSION['dniUser'] = $row['dniUser'];
        }
    }

    header('Location: paginaAdministrador.php');
    exit();

?>