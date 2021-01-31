<?php
    include_once "conexion.php";
    header('Content-Type: text/txt; charset=utf-8');

    class Caso{

        public function contarCasos(){
            $conexion = (new Conexion())->conectar();
            $sql = "SELECT COUNT(*) AS Cantidad FROM `caso`";
            $pdo = $conexion->prepare($sql);
            $pdo->execute();
            
            $json = array();

            while ($row=$pdo->fetch(PDO::FETCH_ASSOC)){
                $json[] = array('casos' => $row['Cantidad']);
            }
                echo json_encode($json[0]['casos']);
        }
    }

    ($Caso = new Caso())->contarCasos();

?>