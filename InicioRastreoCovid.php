<?php
session_start();
?>

<!DOCTYPE html>

<html lang = "es">
<head>
    <title>Página de inicio</title>
    <!--Uso del framework Bootstrap para asegurar un diseño responsive-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/estiloInicio.css">
    <meta charset="utf-8">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="javascript/comprobaciones.js"></script>
</head>

<body>
    <div class="container-fluid">
        <div class="row no-gutter">

            <div class="col-lg-6 col-md-12 ">
                <div class="col-img-inicio">
                    
                </div>
            </div>

            <div class="col-lg-6 col-md-12">
                <div class="col-login">
                    <div class="container-fluid">
                        <div class="row no-gutter">
                            <div class="col-lg-3">
                                
                            </div>
                            <div class="col-lg-6">
                                <div class="formulario">
                                    <form>>
                                        <input type="text" name="dniUser" placeholder="DNI"><br>
                                        <input type="password" name="pass" placeholder="Contraseña"><br>
                                        <input type="button" value="Enviar" onclick="comprobarLogin()"><br>
                                </div>
                                <div class="info">
                                    <h3>Portal de seguimiento de casos</h3>
                                    <p> 
                                        es una herramienta informática desarrollada en colaboración con el equipo de rastreadores del Misnisterio de Sanidad del Gobierno de España, con la finalidad de facilitar la labor de seguimiento de casos COVID-19.
                                    </p>
                                    <p> 
                                        Aenean est leo, ornare eget nisi id, ullamcorper laoreet felis. Vivamus quis turpis nisl. Proin congue mauris et lectus dictum maximus. Quisque fermentum urna non libero cursus, tincidunt cursus metus congue. Mauris a leo ut. <br/>
                                        Quisque fermentum urna.

                                        
                                    </p>
                                    <div class="container">
                                        <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Más info</button>
                                        <div id="myModal" class="modal fade" role="dialog">
                                            <div class="modal-dialog">
                                                <!-- Modal content-->
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                        <h4 class="modal-title">Modal Header</h4>
                                                    </div>
                                                    <div class="modal-body">
                                                        <p>Some text in the modal.</p>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    

                                    <div>
                                        <img src="../src/logoMinisterio3.png" alt="logo">
                                    </div>
                                   
                                   
                                   
                                    
                                   
                                </div>
                            </div>
                            
                        </div>
                        
                    </div>
                    
                </div>
          </div>
      </div>

</body>






</html>