<?php
    session_start();
?>

<!DOCTYPE html>

<html lang = "es">
<head>
    <title>Actualizar estado</title>
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
        <a href="listadoGeneralCasos.php">Listado general</a>
        <a class="active" href="actualizarEstado.php">Actualizar estado</a>
    </div>

    <div class="container-fluid">
        <div class="row no-gutter">      
            <div class="listado">
                <div class="col-lg-12">
            
                    <?php
                        $servername = "localhost";
                        $username = "root";
                        $password = "";
                        $dbname = "rastreocovidddbb";

                        $conn = new mysqli($servername, $username, $password, $dbname);
                        
                        if ($conn->connect_error) {
                            die("Conexión fallida: " . $conn->connect_error);
                        }

                        $sql = "SELECT Descripcion, FechaNotificacion, FechaEfectoEvento, Estado FROM EVENTO ORDER BY Estado;";
                        $result = $conn->query($sql);
                    ?>
    
                    <table class="table table-hover">
                        <caption>Seleccione el evento que desea actualizar</caption>
                        <thead>
                            <tr>
                                <th scope="col">Estado</th>
                                <th scope="col">Fecha de notificación</th>
                                <th scope="col">Fecha de efecto</th>
                                <th scope="col">Descripción</th>    
                            </tr>
                        </thead>
                        <tbody>
                            <?php while($row = $result->fetch_assoc()) { ?>
                                <tr>
                                    <td><a href="index.php"><?php echo $row ['Estado']; ?></a></td>
                                    <td><?php echo $row ['FechaNotificacion']; ?></td>
                                    <td><?php echo $row ['FechaEfectoEvento']; ?></td>
                                    <td><?php echo $row ['Descripcion']; ?></td>
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