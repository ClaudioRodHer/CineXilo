<!DOCTYPE html>
<html lang="en">
    <head>
        <title>	
            Boletos
        </title>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
        <link href="http://allfont.es/allfont.css?fonts=futura-normal" rel="stylesheet" type="text/css" />

        <!-- <LINK REL=StyleSheet HREF="DarkTheme.css" TYPE="text/css" MEDI#6526A1#6526A1#6526A1A=screen> -->
        <!--es el estilo de la tabla -->
        <link rel="stylesheet" href="CSS/estiloboletos.css"/>
        <LINK REL=StyleSheet HREF="CSS/estiloHome.css" >
        <LINK REL=StyleSheet HREF="CSS/fonts.css" />
        <!--Resposiva -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    </head>
    <body>
        <!--es la barra de menus -->
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
                        <li><a href="Promociones.php">Promociones</a></li>
                        <li class="active"><a href= "Boletos.php">Boletos</a></li>
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
            <p1><center><b>Funciones</b></center></p1> 
        </div>

        <div class="tab">
            <button class="tablinks" onclick="openCity(event, 'Dia')" id="defaultOpen">Funciones de este Dia</button>
            <button class="tablinks" onclick="openCity(event, 'semana')">Funciones de esta Semana</button>
            <button class="tablinks" onclick="openCity(event, 'mes')">Funciones de este Mes</button>
        </div>

        <div id="Dia" class="tabcontent">
            <div class="table-responsive">          
                <table class="table">
                    <thead>
                        <tr>
                            <th><center>Peliculas</center></th>
                    <th><center>Funciones</center></th>
                    </tr>
                    <tr>
                        <th >
                            <a href="#" data-toggle="popover" title=
                               "Nombre de la Pelicula"
                               data-content="Some content inside the popover" src="thorR.jpg">
                                <img src="thorR.jpg" width="100%">
                            </a>
                        </th>
                        <th>
                            <center><h1>1:30 pm</h1>
                            <h2>Español</h2>
                            <h2>dub</h2>
                            <p>Sala 1</p></center>
                        </th>                                   
                    </tr>

                    <tr>
                        <th >
                            <a href="#" data-toggle="popover" title=
                                "Nombre de la Pelicula"
                                data-content="Some content inside the popover" src="thorR.jpg">
                                <img src="thorR.jpg" width="100%">
                            </a>
                        </th>
                        <th>
                            <center><h1>4:30 pm</h1>
                            <h2>Español</h2>
                            <h2>dub</h2>
                            <p>Sala 1</p></center>
                        </th>
                    </tr>
                    <tr>
                        <th >
                            <a href="#" data-toggle="popover" title=
                                "Nombre de la Pelicula"
                               data-content="Some content inside the popover" src="thorR.jpg">
                                <img src="thorR.jpg" width="100%">
                            </a>
                        </th>
                        <th>
                            <center><h1>5:30 pm</h1>
                            <h2>Español</h2>
                            <h2>dub</h2>
                            <p>Sala 1</p></center>
                        </th>
                    </tr>
                    <tr>
                        <th >
                            <a href="#" data-toggle="popover" title=
                               "Nombre de la Pelicula"
                               data-content="Some content inside the popover" src="thorR.jpg">
                                <img src="thorR.jpg" width="100%">
                            </a>
                        </th>
                        <th>
                            <center><h1>6:30 pm</h1>
                            <h2>Español</h2>
                            <h2>dub</h2>
                            <p>Sala 1</p></center>
                        </th>
                    </tr>
                    </thead>
                </table>
            </div>
        </div>
    </div>
    <!-- AQUI empieza la sEGUNDA PESTAÑA aqui se verna por semana los elementos incertados d-->   
    <div id="semana" class="tabcontent">
<!--aqui empieza la tabla la cual es responsiva	-->
        <div class="table-responsive">          
            <table class="table">
                <thead>
                    <tr>
                        <th><center>Domingo</center></th>
                <th><center>Lunes</center></th>
                <th><center>Martes</center></th>
                <th><center>Miercoles</center></th>
                <th><center>Jueves</center></th>
                <th><center>Viernes</center></th>
                <th><center>Sabado</center></th>
                </tr>
            <!-- son las imagenes de los Dias divididos ór columas-->    
                <tr>
                    <th >
                <center><a href="#" data-toggle="popover" title=
                           "Esta es la parte en donde ir la informacion de la pelicula como la duracion, el año en el que se estreno y otro tipo de datos que se deseen sobre la pelicula"
                           data-content="Some content inside the popover" src="thorR.jpg">
                        <img src="thorR.jpg" width="90%">
                    </a></center>
                </th>
                <th >
                     <center><a href="#" data-toggle="popover" title=
                           "Esta es la parte en donde ir la informacion de la pelicula como la duracion, el año en el que se estreno y otro tipo de datos que se deseen sobre la pelicula"
                           data-content="Some content inside the popover" src="thorR.jpg">
                        <img src="thorR.jpg" width="90%">
                    </a></center>
                </th>
                <th >
                     <center><a href="#" data-toggle="popover" title=
                           "Esta es la parte en donde ir la informacion de la pelicula como la duracion, el año en el que se estreno y otro tipo de datos que se deseen sobre la pelicula"
                           data-content="Some content inside the popover" src="thorR.jpg">
                        <img src="thorR.jpg" width="90%">
                    </a></center>
                </th>
                <th >
                     <center><a href="#" data-toggle="popover" title=
                           "Esta es la parte en donde ir la informacion de la pelicula como la duracion, el año en el que se estreno y otro tipo de datos que se deseen sobre la pelicula"
                           data-content="Some content inside the popover" src="thorR.jpg">
                        <img src="thorR.jpg" width="90%">
                    </a></center>
                </th>
                <th >
                    <center><a href="#" data-toggle="popover" title=
                           "Esta es la parte en donde ir la informacion de la pelicula como la duracion, el año en el que se estreno y otro tipo de datos que se deseen sobre la pelicula"
                           data-content="Some content inside the popover" src="thorR.jpg">
                        <img src="thorR.jpg" width="90%">
                    </a></center>
                </th>
                <th >
                     <center><a href="#" data-toggle="popover" title=
                           "Esta es la parte en donde ir la informacion de la pelicula como la duracion, el año en el que se estreno y otro tipo de datos que se deseen sobre la pelicula"
                           data-content="Some content inside the popover" src="thorR.jpg">
                        <img src="thorR.jpg" width="90%">
                    </a></center>
                </th>
                <th >
                    <center><a href="#" data-toggle="popover" title=
                           "Esta es la parte en donde ir la informacion de la pelicula como la duracion,
                            el año en el que se estreno y otro tipo de datos que se deseen sobre la pelicula"
                           data-content="Some content inside the popover" src="thorR.jpg">
                        <img src="thorR.jpg" width="90%">
                    </a></center>
                </th> 
                </tr>

                 
                </tr>
                

                </thead>
            </table>
        </div>
    </div>
<!---Aqui empieza el codigo de las funciones por mes-->
    <div id="mes" class="tabcontent">
        <div class="table-responsive">          
            <table class="table">
                <thead>
                    <tr>
                <center><h1>Julio</h1></center>
                    </tr>
                    <tr>
                        <th><center>Domingo</center></th>
                <th><center>Lunes</center></th>
                <th><center>Martes</center></th>
                <th><center>Miercoles</center></th>
                <th><center>Jueves</center></th>
                <th><center>Viernes</center></th>
                <th><center>Sabado</center></th>
                </tr>
            <!-- son las imagenes de los Dias del mes aqrgados a cada celda de la tabla-->    
                <tr>
                    <th >
                <center><a href="#" data-toggle="popover" title=
                           "Esta es la parte en donde ir la informacion de la pelicula como la duracion, el año en el que se estreno y otro tipo de datos que se deseen sobre la pelicula"
                           data-content="Some content inside the popover" src="thorR.jpg">
                        <img src="thorR.jpg" width="90%">
                    </a></center>
                </th>
                <th >
                     <center><a href="#" data-toggle="popover" title=
                           "Esta es la parte en donde ir la informacion de la pelicula como la duracion, el año en el que se estreno y otro tipo de datos que se deseen sobre la pelicula"
                           data-content="Some content inside the popover" src="thorR.jpg">
                        <img src="thorR.jpg" width="90%">
                    </a></center>
                </th>
                <th >
                     <center><a href="#" data-toggle="popover" title=
                           "Esta es la parte en donde ir la informacion de la pelicula como la duracion, el año en el que se estreno y otro tipo de datos que se deseen sobre la pelicula"
                           data-content="Some content inside the popover" src="thorR.jpg">
                        <img src="thorR.jpg" width="90%">
                    </a></center>
                </th>
                <th >
                     <center><a href="#" data-toggle="popover" title=
                           "Esta es la parte en donde ir la informacion de la pelicula como la duracion, el año en el que se estreno y otro tipo de datos que se deseen sobre la pelicula"
                           data-content="Some content inside the popover" src="thorR.jpg">
                        <img src="thorR.jpg" width="90%">
                    </a></center>
                </th>
                <th >
                    <center><a href="#" data-toggle="popover" title=
                           "Esta es la parte en donde ir la informacion de la pelicula como la duracion, el año en el que se estreno y otro tipo de datos que se deseen sobre la pelicula"
                           data-content="Some content inside the popover" src="thorR.jpg">
                        <img src="thorR.jpg" width="90%">
                    </a></center>
                </th>
                <th >
                     <center><a href="#" data-toggle="popover" title=
                           "Esta es la parte en donde ir la informacion de la pelicula como la duracion, el año en el que se estreno y otro tipo de datos que se deseen sobre la pelicula"
                           data-content="Some content inside the popover" src="thorR.jpg">
                        <img src="thorR.jpg" width="90%">
                    </a></center>
                </th>
                <th >
                    <center><a href="#" data-toggle="popover" title=
                           "Esta es la parte en donde ir la informacion de la pelicula como la duracion, el año en el que se estreno y otro tipo de datos que se deseen sobre la pelicula"
                           data-content="Some content inside the popover" src="thorR.jpg">
                        <img src="thorR.jpg" width="90%">
                    </a></center>
                </th> 
                </tr>

                 <tr>
                    <th >
                <center><a href="#" data-toggle="popover" title=
                           "Esta es la parte en donde ir la informacion de la pelicula como la duracion, el año en el que se estreno y otro tipo de datos que se deseen sobre la pelicula"
                           data-content="Some content inside the popover" src="thorR.jpg">
                        <img src="thorR.jpg" width="90%">
                    </a></center>
                </th>
                <th >
                     <center><a href="#" data-toggle="popover" title=
                           "Esta es la parte en donde ir la informacion de la pelicula como la duracion, el año en el que se estreno y otro tipo de datos que se deseen sobre la pelicula"
                           data-content="Some content inside the popover" src="thorR.jpg">
                        <img src="thorR.jpg" width="90%">
                    </a></center>
                </th>
                <th >
                     <center><a href="#" data-toggle="popover" title=
                           "Esta es la parte en donde ir la informacion de la pelicula como la duracion, el año en el que se estreno y otro tipo de datos que se deseen sobre la pelicula"
                           data-content="Some content inside the popover" src="thorR.jpg">
                        <img src="thorR.jpg" width="90%">
                    </a></center>
                </th>
                <th >
                     <center><a href="#" data-toggle="popover" title=
                           "Esta es la parte en donde ir la informacion de la pelicula como la duracion, el año en el que se estreno y otro tipo de datos que se deseen sobre la pelicula"
                           data-content="Some content inside the popover" src="thorR.jpg">
                        <img src="thorR.jpg" width="90%">
                    </a></center>
                </th>
                <th >
                    <center><a href="#" data-toggle="popover" title=
                           "Esta es la parte en donde ir la informacion de la pelicula como la duracion, el año en el que se estreno y otro tipo de datos que se deseen sobre la pelicula"
                           data-content="Some content inside the popover" src="thorR.jpg">
                        <img src="thorR.jpg" width="90%">
                    </a></center>
                </th>
                <th >
                     <center><a href="#" data-toggle="popover" title=
                           "Esta es la parte en donde ir la informacion de la pelicula como la duracion, el año en el que se estreno y otro tipo de datos que se deseen sobre la pelicula"
                           data-content="Some content inside the popover" src="thorR.jpg">
                        <img src="thorR.jpg" width="90%">
                    </a></center>
                </th>
                <th >
                    <center><a href="#" data-toggle="popover" title=
                           "Esta es la parte en donde ir la informacion de la pelicula como la duracion, el año en el que se estreno y otro tipo de datos que se deseen sobre la pelicula"
                           data-content="Some content inside the popover" src="thorR.jpg">
                        <img src="thorR.jpg" width="90%">
                    </a></center>
                </th> 
                </tr>
                
                 <tr>
                    <th >
                <center><a href="#" data-toggle="popover" title=
                           "Esta es la parte en donde ir la informacion de la pelicula como la duracion, el año en el que se estreno y otro tipo de datos que se deseen sobre la pelicula"
                           data-content="Some content inside the popover" src="thorR.jpg">
                        <img src="thorR.jpg" width="90%">
                    </a></center>
                </th>
                <th >
                     <center><a href="#" data-toggle="popover" title=
                           "Esta es la parte en donde ir la informacion de la pelicula como la duracion, el año en el que se estreno y otro tipo de datos que se deseen sobre la pelicula"
                           data-content="Some content inside the popover" src="thorR.jpg">
                        <img src="thorR.jpg" width="90%">
                    </a></center>
                </th>
                <th >
                     <center><a href="#" data-toggle="popover" title=
                           "Esta es la parte en donde ir la informacion de la pelicula como la duracion, el año en el que se estreno y otro tipo de datos que se deseen sobre la pelicula"
                           data-content="Some content inside the popover" src="thorR.jpg">
                        <img src="thorR.jpg" width="90%">
                    </a></center>
                </th>
                <th >
                     <center><a href="#" data-toggle="popover" title=
                           "Esta es la parte en donde ir la informacion de la pelicula como la duracion, el año en el que se estreno y otro tipo de datos que se deseen sobre la pelicula"
                           data-content="Some content inside the popover" src="thorR.jpg">
                        <img src="thorR.jpg" width="90%">
                    </a></center>
                </th>
                <th >
                    <center><a href="#" data-toggle="popover" title=
                           "Esta es la parte en donde ir la informacion de la pelicula como la duracion, el año en el que se estreno y otro tipo de datos que se deseen sobre la pelicula"
                           data-content="Some content inside the popover" src="thorR.jpg">
                        <img src="thorR.jpg" width="90%">
                    </a></center>
                </th>
                <th >
                     <center><a href="#" data-toggle="popover" title=
                           "Esta es la parte en donde ir la informacion de la pelicula como la duracion, el año en el que se estreno y otro tipo de datos que se deseen sobre la pelicula"
                           data-content="Some content inside the popover" src="thorR.jpg">
                        <img src="thorR.jpg" width="90%">
                    </a></center>
                </th>
                <th >
                    <center><a href="#" data-toggle="popover" title=
                           "Esta es la parte en donde ir la informacion de la pelicula como la duracion, el año en el que se estreno y otro tipo de datos que se deseen sobre la pelicula"
                           data-content="Some content inside the popover" src="thorR.jpg">
                        <img src="thorR.jpg" width="90%">
                    </a></center>
                </th> 
                </tr>
                
                 <tr>
                    <th >
                <center><a href="#" data-toggle="popover" title=
                           "Esta es la parte en donde ir la informacion de la pelicula como la duracion, el año en el que se estreno y otro tipo de datos que se deseen sobre la pelicula"
                           data-content="Some content inside the popover" src="thorR.jpg">
                        <img src="thorR.jpg" width="90%">
                    </a></center>
                </th>
                <th >
                     <center><a href="#" data-toggle="popover" title=
                           "Esta es la parte en donde ir la informacion de la pelicula como la duracion, el año en el que se estreno y otro tipo de datos que se deseen sobre la pelicula"
                           data-content="Some content inside the popover" src="thorR.jpg">
                        <img src="thorR.jpg" width="90%">
                    </a></center>
                </th>
                <th >
                     <center><a href="#" data-toggle="popover" title=
                           "Esta es la parte en donde ir la informacion de la pelicula como la duracion, el año en el que se estreno y otro tipo de datos que se deseen sobre la pelicula"
                           data-content="Some content inside the popover" src="thorR.jpg">
                        <img src="thorR.jpg" width="90%">
                    </a></center>
                </th>
                <th >
                     <center><a href="#" data-toggle="popover" title=
                           "Esta es la parte en donde ir la informacion de la pelicula como la duracion, el año en el que se estreno y otro tipo de datos que se deseen sobre la pelicula"
                           data-content="Some content inside the popover" src="thorR.jpg">
                        <img src="thorR.jpg" width="90%">
                    </a></center>
                </th>
                <th >
                    <center><a href="#" data-toggle="popover" title=
                           "Esta es la parte en donde ir la informacion de la pelicula como la duracion, el año en el que se estreno y otro tipo de datos que se deseen sobre la pelicula"
                           data-content="Some content inside the popover" src="thorR.jpg">
                        <img src="thorR.jpg" width="90%">
                    </a></center>
                </th>
                <th >
                     <center><a href="#" data-toggle="popover" title=
                           "Esta es la parte en donde ir la informacion de la pelicula como la duracion, el año en el que se estreno y otro tipo de datos que se deseen sobre la pelicula"
                           data-content="Some content inside the popover" src="thorR.jpg">
                        <img src="thorR.jpg" width="90%">
                    </a></center>
                </th>
                <th >
                    <center><a href="#" data-toggle="popover" title=
                           "Esta es la parte en donde ir la informacion de la pelicula como la duracion, el año en el que se estreno y otro tipo de datos que se deseen sobre la pelicula"
                           data-content="Some content inside the popover" src="thorR.jpg">
                        <img src="thorR.jpg" width="90%">
                    </a></center>
                </th> 
                </tr>
                
                 <tr>
                    <th >
                <center><a href="#" data-toggle="popover" title=
                           "Esta es la parte en donde ir la informacion de la pelicula como la duracion, el año en el que se estreno y otro tipo de datos que se deseen sobre la pelicula"
                           data-content="Some content inside the popover" src="thorR.jpg">
                        <img src="thorR.jpg" width="90%">
                    </a></center>
                </th>
                <th >
                     <center><a href="#" data-toggle="popover" title=
                           "Esta es la parte en donde ir la informacion de la pelicula como la duracion, el año en el que se estreno y otro tipo de datos que se deseen sobre la pelicula"
                           data-content="Some content inside the popover" src="thorR.jpg">
                        <img src="thorR.jpg" width="90%">
                    </a></center>
                </th>
                <th >
                     <center><a href="#" data-toggle="popover" title=
                           "Esta es la parte en donde ir la informacion de la pelicula como la duracion, el año en el que se estreno y otro tipo de datos que se deseen sobre la pelicula"
                           data-content="Some content inside the popover" src="thorR.jpg">
                        <img src="thorR.jpg" width="90%">
                    </a></center>
                </th>
                <th >
                     <center><a href="#" data-toggle="popover" title=
                           "Esta es la parte en donde ir la informacion de la pelicula como la duracion, el año en el que se estreno y otro tipo de datos que se deseen sobre la pelicula"
                           data-content="Some content inside the popover" src="thorR.jpg">
                        <img src="thorR.jpg" width="90%">
                    </a></center>
                </th>
                <th >
                    <center><a href="#" data-toggle="popover" title=
                           "Esta es la parte en donde ir la informacion de la pelicula como la duracion, el año en el que se estreno y otro tipo de datos que se deseen sobre la pelicula"
                           data-content="Some content inside the popover" src="thorR.jpg">
                        <img src="thorR.jpg" width="90%">
                    </a></center>
                </th>
                <th >
                     <center><a href="#" data-toggle="popover" title=
                           "Esta es la parte en donde ir la informacion de la pelicula como la duracion, el año en el que se estreno y otro tipo de datos que se deseen sobre la pelicula"
                           data-content="Some content inside the popover" src="thorR.jpg">
                        <img src="thorR.jpg" width="90%">
                    </a></center>
                </th>
                <th >
                    <center><a href="#" data-toggle="popover" title=
                           "Esta es la parte en donde ir la informacion de la pelicula como la duracion, el año en el que se estreno y otro tipo de datos que se deseen sobre la pelicula"
                           data-content="Some content inside the popover" src="thorR.jpg">
                        <img src="thorR.jpg" width="90%">
                    </a></center>
                </th> 
                </tr>
                

                </thead>
            </table>
        </div>
    </div>
    <!--es el scrip para el efecto de la tabla -->
   
</body>
 <script src="JS/pane.js"></script>
    <script src="JS/menuhamurguesa.js"></script>
</html> 
<!--
<div class="table-responsive">          
                <table class="table">
                    <thead>
                        <tr>
                            <th >
                                <a href="#" data-toggle="popover" title=
                                   "Esta es la parte en donde ir la informacion de la pelicula como la duracion, el año en el que se estreno y otro tipo de datos que se deseen sobre la pelicula"
                                   data-content="Some content inside the popover" src="thorR.jpg">
                                    <img src="thorR.jpg" width="100%">
                                </a>
                            </th>
                            <th>
                                
                                    <th >
                                        <p>Horario1</p>
                                    </th>
                                    <th>
                                        <p>Horario2</p>
                                    </th>
                                    <th>
                                        <p>Horario3</p>
                                    </th>
                                     
                            </th>                                   
                        </tr>
                        
                        <tr>
                            <th >
                                <a href="#" data-toggle="popover" title=
                                   "Esta es la parte en donde ir la informacion de la pelicula como la duracion, el año en el que se estreno y otro tipo de datos que se deseen sobre la pelicula"
                                   data-content="Some content inside the popover" src="thorR.jpg">
                                    <img src="thorR.jpg" width="100%">
                                </a>
                            </th>
                            <th>
                                <a href="#" data-toggle="popover" title=
                                   "Esta es la parte en donde ir la informacion de la pelicula como la duracion, el año en el que se estreno y otro tipo de datos que se deseen sobre la pelicula"
                                   data-content="Some content inside the popover">
                                    <img src="dragon.jpg" width="100%">
                                </a>
                            </th>
                        </tr>
                    </thead>
                </table>
            </div>
        </div>

<a href="#" data-toggle="popover" title=
                                   "Esta es la parte en donde ir la informacion de la pelicula como la duracion, el año en el que se estreno y otro tipo de datos que se deseen sobre la pelicula"
                                   data-content="Some content inside the popover" src="thorR.jpg">
                                    <img src="thorR.jpg" width="100%">
                                </a>
-->
