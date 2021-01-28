<?php
session_start();
?>

<!DOCTYPE html>

<html lang = "es">
<head>
    <title>Administración</title>
    <!--Uso del framework Bootstrap para asegurar un diseño responsive-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/estiloNuevoEvento.css">
    <meta charset="utf-8">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>
    <div class="topnav">
        <a  href="paginaAdministrador.html">Nuevo caso</a>
        <a class="active" href="nuevoEvento.html">Nuevo evento</a>
        <a href="#listadoGeneral">Listado general</a>
        <a href="#about">About</a>
    </div>

    <div class="container-fluid">
        <div class="row no-gutter">

            <div class="col-lg-6 col-md-12">
                <div class="row no-gutter">
                    <div class="nuevoEvento">
                        <div class="col-lg-12">
                            <form action="succes.html" method="post">
                                <input type="text" name="fechaNofificacion" placeholder="Fecha de notificación"><br>
                                <input type="text" name="fechaEfecto" placeholder="Fecha de efecto">
                                <textarea name="descripcion" rows="10" cols="100" placeholder="Descripción"></textarea>
                                <input type="submit" value="Registrar"> 
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
