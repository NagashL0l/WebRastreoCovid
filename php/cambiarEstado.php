<?php
    include_once "conexion.php";
    header('Content-Type: text/txt; charset=utf-8');

    class Evento{

        public function cambiarEstado($idEvento, $nuevoEstado){
            $conexion = (new Conexion())->conectar();
            $parametros = array(':idEvento'=>$idEvento, ':nuevoEstado'=>$nuevoEstado);
            $sql = "UPDATE evento SET Estado = :nuevoEstado WHERE Id = :idEvento";
            $pdo = $conexion->prepare($sql);
            $pdo->execute($parametros);

            echo "Estado del evento actualizado";
        }
    }

    ($evento = new Evento())->cambiarEstado($_GET['idEvento'], $_GET['nuevoEstado']);

?>