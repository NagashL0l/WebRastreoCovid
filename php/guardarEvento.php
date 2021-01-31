<?php
    include_once "conexion.php";
    header('Content-Type: text/txt; charset=utf-8');

    class Evento{

        public function registrarEvento($fechaNotificacionEvento, $fechaEfectoEvento, $descripcionEvento){
            $conexion = (new Conexion())->conectar();
            $parametros = array(':fechaNotificacionEvento'=>$fechaNotificacionEvento, ':fechaEfectoEvento'=>$fechaEfectoEvento, ':descripcionEvento'=>$descripcionEvento);
            $sql = "INSERT INTO `evento` VALUES (NULL, :descripcionEvento, :fechaNotificacionEvento, :fechaEfectoEvento, 1)";
            $pdo = $conexion->prepare($sql);
            $pdo->execute($parametros);

            echo "Evento registrado";
        }
    }

    ($evento = new Evento())->registrarEvento($_GET['fechaNotificacionEvento'], $_GET['fechaEfectoEvento'], $_GET['descripcionEvento']);

?>