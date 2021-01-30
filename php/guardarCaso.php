<?php
    include_once "conexion.php";
    header('Content-Type: text/txt; charset=utf-8');

    class Caso{

        public function registrarCaso($dniCaso, $nombreCaso, $movilCaso , $emailCaso, $fechaAperturaCaso, $fechaCierreCaso){
            $conexion = (new Conexion())->conectar();
            $parametros = array(':dniCaso'=>$dniCaso, ':nombreCaso'=>$nombreCaso, ':movilCaso'=>$movilCaso, ':emailCaso'=>$emailCaso, ':fechaAperturaCaso'=>$fechaAperturaCaso, ':fechaCierreCaso'=>$fechaCierreCaso);
            $sql = "INSERT INTO `CASO` VALUES (:dniCaso, :nombreCaso, :movilCaso, :emailCaso, :fechaAperturaCaso, :fechaCierreCaso)";
            $pdo = $conexion->prepare($sql);
            $pdo->execute($parametros);

            echo "Caso registrado";
        }
    }

    ($caso = new Caso())->registrarCaso($_GET['dniCaso'], $_GET['nombreCaso'], $_GET['movilCaso'], $_GET['emailCaso'], $_GET['fechaAperturaCaso'], $_GET['fechaCierreCaso']);

?>