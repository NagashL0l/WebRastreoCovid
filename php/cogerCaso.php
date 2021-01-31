<?php

    include_once "conexion.php";
    header('Content-Type: text/txt; charset=utf-8');

    class Caso{

        public function entrarCaso($dniCaso){
            $conexion = (new Conexion())->conectar();
            $parametros = array(':dniCaso'=>$dniCaso);

            $sql = "SELECT 1 FROM `caso` WHERE Dni = :dniCaso";
            
            $pdo = $conexion->prepare($sql);
            $pdo->execute($parametros);

            $json = array();

            while ($row=$pdo->fetch(PDO::FETCH_ASSOC)){
                $json[] = array('resultado' => $row['1']);
            }
                echo json_encode($json);
        }
    }

    ($caso = new Caso())->entrarCaso($_GET['dniCaso']);

    //Mostrar el caso
 
?>