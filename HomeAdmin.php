<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Panel de Control</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
        <link href="http://allfont.es/allfont.css?fonts=futura-normal" rel="stylesheet" type="text/css" />


        <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" >
        <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
        <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
        <!------ Include the above in your HEAD tag ---------->

        <title>Panel de Control</title>
        <link rel="stylesheet" href="css/estiloadminhome.css">

        <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    </head>
    <body>
        <div class="contenedor-form">


            <div class="container">
                <h2>Panel de Control Administrador</h2>
                <p>Bienvenido</p>
                <ul class="nav nav-pills">
                    <li class="active"><a data-toggle="pill" href="#home">Peliculas</a></li>
                    <li><a data-toggle="pill" href="#menu1">Dulceria</a></li>
                    <li><a data-toggle="pill" href="#menu2">Promociones</a></li>
                    <li><a data-toggle="pill" href="#menu3">Informacion del cine</a></li>
                </ul>

                <div class="tab-content">
                    <div id="home" class="tab-pane fade in active">
                        <h3>Peliculas</h3>
                       <input type="text" placeholder="Nombre de la Pelicula" required name="txtbnompelicula">
                       <input type="date" placeholder="Fecha de estreno" required name="dtestreno">
                       <input type="selcombo" placeholder="Duracion" required name="cmbDuracion">
                    </div>
                    <div id="menu1" class="tab-pane fade">
                        <h3>Dulceria</h3>
                        <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    </div>
                    <div id="menu2" class="tab-pane fade">
                        <h3>Promociones</h3>
                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
                    </div>
                    <div id="menu3" class="tab-pane fade">
                        <h3>Informacion del cine</h3>
                        <p>Eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                    </div>
                </div>
            </div>

            <!-- <h2>Iniciar sesión</h2>
             <form action="validar.php" method="post">
                 <input type="text" placeholder="Usuario" required name="usuario">
                 <input type="password" placeholder="Contraseña" required name="contraseña">
                 <input type="submit" value="Iniciar Sesión">
             </form>      
         </div>

         

         <div class="reset-password">
             <a href="#">Olvide Mi contraseña</a>
         </div>-->
    </body>
</html>
