<!DOCTYPE html>

<html lang="pt-br">

    <head>
        <meta charset="UTF-8">
        <title>Cine Xilotzin</title>

        <!--responsivo-->
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

        <!-- ------------------------------------------------------------------------------------------------------------------------- -->


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
       <!--<script src="JS/menuhamurguesa.js"></script>-->
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
                        <li class="active"><a href="Home.php">Inicio</a></li>
                        <li><a href="Cartelera.php">Cartelera</a></li>
                        <li ><a href="Dulceria.php">Dulceria</a></li>
                        <li><a href="Promociones.php">Promociones</a></li>
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
        <h1></h1>
        <div class="title">
            <p1><center><b>Cine/Teatro Xilotzin</b></center></p1> 
        </div>


    <center> <div class="container"> 
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                    <li data-target="#myCarousel" data-slide-to="3"></li>
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner">
                    <div class="item active">

                        <img src="cine3.jpg" alt="Estreno!!" style="width:70%;">
                    </div>

                    <div class="item">
                        <img src="cine2.jpg" alt="Aprovecha" style="width:40%;">
                    </div>

                    <div class="item">
                        <img src="cine1.jpg" alt="Ven y Festeja con nosotros" style="width:70%;">
                    </div>

                    <div class="item">
                        <?php
                        $conexion = mysqli_connect("localhost", "root", "", "CineXilotzin");
                        //$query=$conexion->query("SELECT URLImagenPelicula FROM CineXilotzin.Peliculas WHERE URLImagenPelicula=img/peliculas/antmanWasp.jpeg");
                        //$sql=$conexion->query("select URLImagenPelicula from Peliculas where Fecha_Estreno_Pelicula  < DATE_FORMAT(NOW(),'%Y-%m-%d 00:00:00');");
                        echo' <img src="img/peliculas/link1.jpg" alt="Ven y Festeja con nosotros" style="width:40%;">';
                        //validar fechasde registro mas recientes 
                        //para poderactiar la pelicula y asi remplazar
                        // la imagenque esta dentro de los carruseles, 
                        // que se vayan recorreindo de posicion 
                        // de acuerdo a su fecha de incersion 
                        // tomar fecha automatica del sistema  
                        ?>
                    </div>

                    <!-- Wrapper for slides -->

                    <!-- Left and right controls -->
                    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="#myCarousel" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
    </center>
</body>
<script src="JS/menuhamurguesa.js"></script>


</html>

