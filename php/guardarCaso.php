<?php
    include_once "conexion.php";
    header('Content-Type: text/txt; charset=utf-8');

    class Caso{

        public function registrarCaso($dniCaso, $nombreCaso, $movilCaso , $emailCaso){
            $conexion = (new Conexion())->conectar();
            $parametros = array(':dniCaso'=>$dniCaso, ':nombreCaso'=>$nombreCaso, ':movilCaso'=>$movilCaso, ':emailCaso'=>$emailCaso);
            $sql = "INSERT INTO `CASO` VALUES (:dniCaso, :nombreCaso, :movilCaso, :emailCaso, 1)";
            $pdo = $conexion->prepare($sql);
            $pdo->execute($parametros);

            echo "Caso registrado";
        }
    }

    ($caso = new Caso())->registrarCaso($_GET['dniCaso'], $_GET['nombreCaso'], $_GET['movilCaso'], $_GET['emailCaso']);

?>