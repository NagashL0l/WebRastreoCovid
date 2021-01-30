<?php
session_start();
?>

<!DOCTYPE html>

<html lang = "es">
<head>
    <title>Página de inicio</title>
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
                                    <form>
                                        <input id="ldniUser" type="text" name="dniUser" placeholder="DNI"><br>
                                        <input id="lpass" type="password" name="pass" placeholder="Contraseña"><br>
                                        <input type="button" value="Entrar" onclick="comprobarLogin();redireccionAdministrador()"><br>
                                    </form>
                                </div>
                                <div class="info">
                                    <h3>Portal de seguimiento de casos</h3>
                                    <p> 
                                        es una herramienta informática desarrollada en colaboración con el equipo de rastreadores del Misnisterio de Sanidad del Gobierno de España, con la finalidad de facilitar la labor de seguimiento de casos COVID-19.
                                    </p>
                                    
                                    
                                    <div class="container">
                                        <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Más información</button>
                                        <div id="myModal" class="modal fade" role="dialog">
                                            <div class="modal-dialog">
                                                <!-- Modal content-->
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                        <h4 class="modal-title">Información general</h4>
                                                    </div>
                                                    <div class="modal-body">
                                                        <p><p>La COVID-19 afecta de distintas maneras en función de cada persona. La mayoría de las personas que se contagian presentan síntomas de intensidad leve o moderada, y se recuperan sin necesidad de hospitalización.
                                                                Los síntomas más habituales son los siguientes:</p>
                                                                - Fiebre<br>
                                                                - Tos seca<br>
                                                                - Cansancio<br>
                                                                <p>Otros síntomas menos comunes son los siguientes:</p>
                                                                - Molestias y dolores<br>
                                                                - Dolor de garganta<br>
                                                                - Diarrea<br>
                                                                - Conjuntivitis<br>
                                                                - Dolor de cabeza<br>
                                                                - Pérdida del sentido del olfato o del gusto<br>
                                                                - Erupciones cutáneas o pérdida del color en los dedos de las manos o de los pies<br>
                                                                <p>Los síntomas graves son los siguientes:</p>
                                                                - Dificultad para respirar o sensación de falta de aire<br>
                                                                - Dolor o presión en el pecho<br>
                                                                - Incapacidad para hablar o moverse<br>
                                                                - Si presentas síntomas graves, busca atención médica inmediata. Sin embargo, siempre debes llamar a tu doctor o centro de atención sanitaria antes de presentarte en el lugar en cuestión.<br>

                                                                <p>Lo recomendable es que las personas que sufran síntomas leves y tengan un buen estado de salud general se confinen en casa.
                                                                De media, las personas que se contagian empiezan a presentar síntomas en un plazo de 5 a 6 días desde que se infectan, pero pueden tardar hasta 14.</p></p>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                
                                
                                    
                                    

                                    <div>
                                        <img src="src/logoMinisterio3.png" alt="logo">
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