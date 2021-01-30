<?php
    include_once "conexion.php";
    header('Content-Type: text/txt; charset=utf-8');

    class Evento{

        public function registrarEvento($idEvento, $fechaNotificacionEvento, $fechaEfectoEvento, $descripcionEvento){
            $conexion = (new Conexion())->conectar();
            $parametros = array(':idEvento'=>$idEvento, ':fechaNotificacionEvento'=>$fechaNotificacionEvento, ':fechaEfectoEvento'=>$fechaEfectoEvento, ':descripcionEvento'=>$descripcionEvento);
            $sql = "INSERT INTO `evento` VALUES (:idEvento :fechaNotificacionEvento, :fechaEfectoEvento, :descripcionEvento, 1)";
            $pdo = $conexion->prepare($sql);
            $pdo->execute($parametros);

            echo "Evento registrado";
        }
    }

    ($evento = new Evento())->registrarEvento($_GET['idEvento'], $_GET['fechaNotificacionEvento'], $_GET['fechaEfectoEvento'], $_GET['descripcionEvento']);

?>