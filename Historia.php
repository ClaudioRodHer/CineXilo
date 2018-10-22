<!DOCTYPE html>
<!--
<img src="img/demo/nyc1-500px.jpg" width="1280" height="960" data-highres="img/demo/nyc1-highres.jpg">
  <img src="img/demo/nyc2-500px.jpg" width="500" height="375" data-highres="img/demo/nyc2-highres.jpg">
  <img src="img/demo/nyc3-500px.jpg" width="500" height="667" data-highres="img/demo/nyc3-highres.jpg">
-->
<html>
    <head>

        <title>Historia</title>
        <meta charset="utf-8">
        <!--responsivo-->
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

        <!-- ------------------------------------------------------------------------------------------------------------------------- -->

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
        <link href="http://allfont.es/allfont.css?fonts=futura-normal" rel="stylesheet" type="text/css" />

        <LINK REL=StyleSheet HREF="DarkTheme.css" TYPE="text/css">

              <LINK REL=StyleSheet HREF="CSS/estiloHome.css" >
        <LINK REL=StyleSheet HREF="CSS/fonts.css" />
         <LINK REL=StyleSheet HREF="CSS/estiloHistoria.css"/>
		<LINK REL=StyleSheet HREF="CSS/estilos.css"/>
		 <link rel="stylesheet" href="CSS/estiloboletos.css"/>
        <LINK REL=StyleSheet HREF="CSS/estiloHome.css" >
        <LINK REL=StyleSheet HREF="CSS/fonts.css" />
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
                        <li ><a href="Dulceria.php">Dulceria</a></li>
                        <li><a href="Promociones.php">Promociones</a></li>
                        <li><a href= "Boletos.php">Boletos</a></li>
                        <li class="active"><a href="Historia.php">Historia</a></li>
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
            <p1><center><b>Historia</b></center></p1> 
        </div>

        <div id="general">
		
			<div id="resenias">
				<div id="fotosC">
				<p>Un Poco de Historia</p>
				<?php
					$conexion=mysqli_connect("localhost","root","","CineXilotzin");
					$query=$conexion->query("SELECT iCineHistoria FROM CineXilotzin.CineHistoria;");
					while($row=$query->fetch_assoc()){
					echo'<option value="'.$row['iCineHistoria'].'">'.$row['iCineHistoria'].'</option>'."\n";
					}
				?>
			</div>	
			<p>Fotos</p>
		
		<div class="content-all">
			<div class="content-carrousel">
				<figure><img src="img/imgCine/img12.jpg"></figure>
				<figure><img src="img/imgCine/img2.jpg"></figure>
				<figure><img src="img/imgCine/img3.jpg"></figure>
				<figure><img src="img/imgCine/img4.jpg"></figure>
				<figure><img src="img/imgCine/img5.jpg"></figure>
				<figure><img src="img/imgCine/img6.jpg"></figure>
				<figure><img src="img/imgCine/img7.jpg"></figure>
				<figure><img src="img/imgCine/img8.jpg"></figure>
				<figure><img src="img/imgCine/img9.jpg"></figure>
				<figure><img src="img/imgCine/img10.jpg"></figure>
			
			</div>
		</div>	
			</div>
			
			<div id="informacion">
				<h4>Nuestra Ubicacion</h4>
				<center><iframe src="https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!
				1d7456.942342223618!2d-99.5345407!3d19.9513609!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!
				4f13.1!4m8!3e3!4m0!4m5!1s0x85d2362325dce233%3A0xee829d4a0fdb458f!2sCine+Teatro+Xilotzin%2C+
				Av.+L%C3%A1zaro+C%C3%A1rdenas+Nte.+119-A%2C+Jilotepec+de+Andres+Molina+Enriquez%2C+54240+Jilotepec+de+Molina+Enr%C3%ADquez%
				2C+M%C3%A9x.!3m2!1d19.951360899999997!2d-99.5345407!5e1!3m2!1ses!2smx!4v1533090036913"
				 width="200" height="200" frameborder="0" style="border:0" allowfullscreen></iframe></center><br>
				<h4>Contactanos</h4>
				<p>Telefono:</p>
				<?php
					$conexion=mysqli_connect("localhost","root","","CineXilotzin");
					$query=$conexion->query("SELECT TelefonoCine FROM CineXilotzin.CineHistoria;");
					while($row=$query->fetch_assoc()){
					echo'<option value="'.$row['iCineHistoria'].'">'.$row['TelefonoCine'].'</option>'."\n";
					}
				?>
				<p>E-mail</p>
				<?php
					$conexion=mysqli_connect("localhost","root","","CineXilotzin");
					$query=$conexion->query("SELECT `E-Mail_Cine` FROM CineXilotzin.CineHistoria;");
					while($row=$query->fetch_assoc()){
					echo'<option value="'.$row['iCineHistoria'].'">'.$row['E-Mail_Cine'].'</option>'."\n";
					}
				?>
			</div>
			
			
		</div>
		

    </body>
    <script src="JS/menuhamurguesa.js"></script>
    <script>
</html>
