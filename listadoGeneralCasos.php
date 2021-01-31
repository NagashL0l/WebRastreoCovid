<?php
    session_start();
?>

<!DOCTYPE html>

<html lang = "es">
<head>
    <title>Listado General de Casos</title>
    <!--Uso del framework Bootstrap para asegurar un diseño responsive-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/estiloListado.css">
    <meta charset="utf-8">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="javascript/comprobaciones.js"></script>
    <script src="javascript/redirecciones.js"></script>
    <script src="javascript/checkInputs.js"></script>
</head>

<body>
    
    <?php
        if(!isset($_SESSION['dniUser'])){ 
            header("Location: index.php");
            exit;
        }
    ?>

    <div class="topnav">
        <a href="paginaAdministrador.php">Nuevo caso</a>
        <a href="nuevoEvento.php">Nuevo evento</a>
        <a class="active" href="listadoGeneralCasos.php">Listado general</a>
        <a  href="actualizarEstado.php">Actualizar estado</a>
    </div>

    <div class="container-fluid">
        <div class="row no-gutter">      
            <div class="listado">
                <div class="col-lg-12">
            
                    <form>
                        <?php 
                            if(!isset($_GET['cierre'])){
                                echo '<input type="radio" id="all" name="casos" value="all" checked="true">';
                            }else{
                                echo '<input type="radio" id="all" name="casos" value="all">';
                            }
                        ?>
                        <label for="all">Todos los casos</label>
                        <?php 
                            if(isset($_GET['cierre']) && $_GET['cierre'] == 1){
                                echo '<input type="radio" id="cierre" name="casos" value="cierre" checked="true">';
                            }else{
                                echo '<input type="radio" id="cierre" name="casos" value="cierre">';
                            }
                        ?>
                        <label for="cierre">Con fecha de cierre</label>
                        <?php 
                            if(isset($_GET['cierre']) && $_GET['cierre'] == 0){
                                echo '<input type="radio" id="nocierre" name="casos" value="nocierre" checked="true">';
                            }else{
                                echo '<input type="radio" id="nocierre" name="casos" value="nocierre">';
                            }
                        ?>
                        <label for="nocierre">Sin fecha de cierre</label>
                    </form>

                    <script>
                        $(document).ready(function(){
                            $("input[type=radio][name=casos]").change(function(){
                                if(this.value == "all"){
                                    window.open("listadoGeneralCasos.php" ,"_self");
                                }else if(this.value == "cierre"){
                                    window.open("listadoGeneralCasos.php?cierre=1" ,"_self");
                                }else if(this.value == "nocierre"){
                                    window.open("listadoGeneralCasos.php?cierre=0" ,"_self");
                                }
                            });
                        });
                    </script>

                    <?php
                        $servername = "localhost";
                        $username = "root";
                        $password = "";
                        $dbname = "rastreocovidddbb";

                        $conn = new mysqli($servername, $username, $password, $dbname);
                        
                        if ($conn->connect_error) {
                            die("Conexión fallida: " . $conn->connect_error);
                        }

                        if(!isset($_GET['cierre'])){
                            $sql = "SELECT Dni, Nombre, Movil, Email, FechaApertura, FechaCierre FROM CASO";
                        }else if($_GET['cierre'] == 0){
                            $sql = "SELECT Dni, Nombre, Movil, Email, FechaApertura, FechaCierre FROM CASO WHERE FechaCierre='0000-00-00'";
                        }else if($_GET['cierre'] == 1){
                            $sql = "SELECT Dni, Nombre, Movil, Email, FechaApertura, FechaCierre FROM CASO WHERE NOT FechaCierre='0000-00-00'";
                        }else{
                            $sql = "SELECT Dni, Nombre, Movil, Email, FechaApertura, FechaCierre FROM CASO";
                        }
                        
                        $result = $conn->query($sql);
                    ?>
    
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">Dni</th>
                                <th scope="col">Nombre</th>
                                <th scope="col">Móvil</th>
                                <th scope="col">Email</th>
                                <th scope="col">Fecha de apertura</th>
                                <th scope="col">Fecha de cierre</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php while($row = $result->fetch_assoc()) { ?>
                                <tr>
                                    <td><?php echo $row ['Dni']; ?></td>
                                    <td><?php echo $row ['Nombre']; ?></td>
                                    <td><?php echo $row ['Movil']; ?></td>
                                    <td><?php echo $row ['Email']; ?></td>
                                    <td><?php echo $row ['FechaApertura']; ?></td>
                                    <td><?php 
                                        if($row ['FechaCierre'] == "0000-00-00"){
                                            echo "No tiene";
                                        }else{
                                            echo $row ['FechaCierre'];
                                        }
                                    ?></td>
                                </tr>      
                            <?php } ?>          

                            <?php $conn->close(); ?>

                        </tbody>
                        
                    </table>
                </div>
                
            </div>
        </div> 
    </div>

</body>