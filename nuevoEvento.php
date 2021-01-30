<?php
    session_start();
?>

<!DOCTYPE html>

<html lang = "es">
<head>
    <title>Administración</title>
    <!--Uso del framework Bootstrap para asegurar un diseño responsive-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/estiloNuevoEvento.css">
    <meta charset="utf-8">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="javascript/comprobaciones.js"></script>
    <script src="javascript/redirecciones.js"></script>
    <script src="javascript/checkInputs.js"></script>
    <script src="javascript/sha1.js"></script>
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
        <a class="active" href="nuevoEvento.php">Nuevo evento</a>
        <a href="listadoGeneralCasos.php">Listado general</a>
        <a href="#about">About</a>
    </div>

    <div class="container-fluid">
        <div class="row no-gutter">

            <div class="col-lg-6 col-md-12">
                <div class="row no-gutter">
                    <div class="nuevoEvento">
                        <div class="col-lg-12">
                            <form>
                                <input id="rfechaNotificacion" type="text" name="fechaNofificacion" placeholder="Fecha de notificación (anno-mm-dd)"><br>
                                <input id="rfechaEfecto" type="text" name="fechaEfecto" placeholder="Fecha de efecto (anno-mm-dd)">
                                <textarea id="rdescripcion" name="descripcion" rows="10" cols="100" placeholder="Descripción del evento"></textarea>
                                <input type="button" value="Enviar" onclick="comprobarRegistroEvento();location.reload()"><br>
                            </form>
                        </div>
                        
                    </div>
                </div>
            </div>
            
            <div class="col-lg-6 col-md-12">
                <div class="row no-gutter">
                    <div class="contTotalEventos">
                        <div class="col-lg-12">
                            <div class="texto">
                                <b>Eventos registrados</b>
                                <div class="eventos">
                                    <b>003</b>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
    

</body>
