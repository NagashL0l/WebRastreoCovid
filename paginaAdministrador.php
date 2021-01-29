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
    <link rel="stylesheet" href="css/estiloInicio.css">
    <meta charset="utf-8">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="javascript/comprobaciones.js"></script>
    <script src="javascript/redirecciones.js"></script>
    <script src="javascript/checkInputs.js"></script>
</head>

<body>
    <?php
        if(!isset($_SESSION['dniUser']){
            redireccionInicio();
        }
    ?>

    <div class="topnav">
        <a class="active" href="paginaAdministrador.html">Nuevo caso</a>
        <a href="nuevoEvento.html">Nuevo evento</a>
        <a href="#listadoGeneral">Listado general</a>
        <a href="#about">About</a>
    </div>

    <div class="container-fluid">
        <div class="row no-gutter">

            <div class="col-lg-6 col-md-12">
                <div class="row no-gutter">
                    <div class="nuevoCaso">
                        <div class="col-lg-12">
                            <form action="succes.html" method="post">
                                <input type="text" name="DNI" placeholder="DNI"><br>
                                <input type="text" name="nombre" placeholder="Nombre">
                                <input type="text" name="movil" placeholder="Teléfono">
                                <input type="text" name="email" placeholder="Email">
                                <input type="submit" value="Registrar"> 
                        </div>
                        
                    </div>
                </div>
            </div>
            
            <div class="col-lg-6 col-md-12">
                <div class="row no-gutter">
                    <div class="contTotalCasos">
                        <div class="col-lg-12">
                            <div class="texto">
                                <b>Casos registrados</b>
                                <div class="casos">
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
