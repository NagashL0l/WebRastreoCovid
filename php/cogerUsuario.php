<?php

    include_once "conexion.php";
    header('Content-Type: text/txt; charset=utf-8');

    class Usuario{

        public function entrarUsuario($dniUser, $pass){
            $conexion = (new Conexion())->conectar();
            $parametros = array(':dniUser'=>$dniUser, ':pass'=>$pass);

            $sql = "SELECT 1 FROM `administrador` WHERE Dni = :dniUser AND Pass = :pass";
            
            $pdo = $conexion->prepare($sql);
            $pdo->execute($parametros);

            $json = array();

            while ($row=$pdo->fetch(PDO::FETCH_ASSOC)){
                $json[] = array('resultado' => $row['1']);
            }
                echo json_encode($json);
        }
    }

    ($usuario = new Usuario())->entrarUsuario($_GET['dniUser'], $_GET['pass']);

?>