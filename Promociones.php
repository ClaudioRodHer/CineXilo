<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Promociones</title>

        <!--responsivo-->
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

        <!-- ------------------------------------------------------------------------------------------------------------------------- -->


        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
        <link href="http://allfont.es/allfont.css?fonts=futura-normal" rel="stylesheet" type="text/css" />

        <LINK REL=StyleSheet HREF="CSS/estiloHome.css" >
        <LINK REL=StyleSheet HREF="CSS/fonts.css" />
	 <link rel="stylesheet" href="CSS/estiloboletos.css"/>
        <LINK REL=StyleSheet HREF="CSS/estiloHome.css" >
        <LINK REL=StyleSheet HREF="CSS/fonts.css" />
        <style type="text/css">

            @font-face{
                font-family: 'Futura-Bold', arial;
                src: url("http://allfont.es/allfont.css?fonts=futura-bold");
            }
            body {
                color: black;
                background-color: #FF43C6 
            }
        </style>
        <script>
            $(document).ready(function () {
                $('[data-toggle="popover"]').mouseout();
                $("#mostrarmodal").modal("show");
            });
        </script>
        <script>
            $('.photoset-grid-basic').photosetGrid();
        </script>
    </head>
    <body>
        <header>

            <!----------------------------------------------------------------------------------------------------->           
            <div class="menu_bar">
                <a href="#" class="bt-menu"><span class="glyphicon glyphicon-menu-hamburger"></span>Xilotzin</a>            
            </div>
            <!----------------------------------------------------------------------------------------------------->       
            <nav class="navbar navbar-inverse">
                <div class="container-fluid">

                    <ul class="nav navbar-nav">
                        <li><a href="Home.php">Inicio</a></li>
                        <li><a href="Cartelera.php">Cartelera</a></li>
                        <li><a href="Dulceria.php">Dulceria</a></li>
                        <li class="active"><a href="Promociones.php">Promociones</a></li>
                        <li><a href= "Boletos.php">Boletos</a></li>
                        <li><a href="Historia.php">Historia</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="https://www.facebook.com/CineTeatroXilotzin/" target="_blank">
                                <span class="fa fa-facebook" ></span> </a></li>
                        <li><a href="https://www.instagram.com/explore/locations/268154316896875/cine-teatro-xilotzin/" target="_blank">
                                <span class="fa fa-instagram" ></span></a></li>
                    </ul>


                </div>
            </nav> 
        </header>
        <!-- --------------------------AQUI EMPIEZA EL CODIGO DE LA PAGINA----------------------- -->        
        <div class="title">
            <p1><center><b>Promociones</b></center></p1> 
        </div>
        <div class="tablapromo">
            <center><TABLE >
                    <TR>
                        <TD ROWSPAN="3" colspan="3">
                            <img src="thorR.jpg" width="900" height="900" data-highres="img/demo/nyc1-highres.jpg">
                        </TD>
                        <TD>
                            <img src="cine1.jpg" width="300" height="300" data-highres="img/demo/nyc2-highres.jpg"> 
                        </TD> 
                    </TR>
                    <TR>
                        <TD>
                            <img src="cine2.jpg" width="300" height="300" data-highres="img/demo/nyc2-highres.jpg">     
                        </TD> 
                    </TR>
                    <TR>
                        <TD>
                            <img src="cine3.jpg" width="300" height="300" data-highres="img/demo/nyc2-highres.jpg"> 
                        </TD> 
                    </TR>
                    <TR>
                        <TD>
                            <img src="batman.jpg" width="300" height="300" data-highres="img/demo/nyc2-highres.jpg"> 
                        </TD>
                        <TD>
                            <img src="dragon.jpg" width="300" height="300" data-highres="img/demo/nyc2-highres.jpg"> 
                        </TD>
                        <TD>
                            <img src="opSombra.jpg" width="300" height="300" data-highres="img/demo/nyc2-highres.jpg"> 
                        </TD>
                        <TD>
                            <img src="neSolos.jpg" width="300" height="300" data-highres="img/demo/nyc2-highres.jpg"> 
                        </TD>
                    </TR>
                </TABLE></center>
        </div>

    </body>
    <script src="JS/menuhamurguesa.js"></script>
</html>
