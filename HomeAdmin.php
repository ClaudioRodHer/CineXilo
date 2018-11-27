
<!DOCTYPE html>
<?php
// Desactivar toda notificación de error 
error_reporting(0);
?>﻿


<html>
    <head>
        <meta charset="UTF-8">
        <title>Panel de Control</title>
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
                    <li class="active"><a data-toggle="pill" href="#Peliculas">Peliculas</a></li>
                    <li><a data-toggle="pill" href="#Funciones">Funciones</a></li>
                    <li><a data-toggle="pill" href="#Dulceria">Dulceria</a></li>
                    <li><a data-toggle="pill" href="#Promociones">Promociones</a></li>
                    <li><a data-toggle="pill" href="#Inf_Cine">Informacion del cine</a></li>
                    <li><a data-toggle="pill" href="#fotosCine">Fotos del cine</a></li>
                    <li><a data-toggle="pill" href="#ConfDeUsuario">Configuracion del Usuario</a></li>
                    <li><a data-toggle="pill" href="#Reportes">Reportes de Usuario</a></li>
                </ul>

                <div class="tab-content">
                    <div id="Peliculas" class="tab-pane fade in active">
                        <form action="peliculascod.php" method="POST" enctype="multipart/form-data">
                            <h3>Peliculas</h3>
                            <input type="text" placeholder="Nombre de la Pelicula" required name="txtbnompelicula"/>
                            <input type="date" placeholder="Fecha de estreno: ej.(2017-05-13)" required name="dtestreno"/>
                            <input type="time" placeholder="Duracion: ej.(01-45-00)" required name="txtDuracion"/>
                            <textarea name="txaDescripcion" rows="6" cols="68" placeholder="Ingresa la descripcion de la pelicula"></textarea> 
                            <h4>Agregar Imagen</h4>
                            <input type="File" name="foto" id="foto"><!-- solo acepta-->
                            <div id="imagePreview">
                                
                            </div>
                             <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"> </script>
                          
                            <script type="text/javascript">
                                (function(){
                                    function filePreview(input){
                                        if(input.files && input.files[0]){
                                            var reader=new FileReader();
                                            reader.onload=function(e){
                                                $('#imagePreview').html("<center><img src='"+e.target.result+"' alt='imgPelicula' width='200' height='200' border='2'></center>");
                                            }
                                            reader.readAsDataURL(input.files[0]);
                                        }
                                    }
                                    $('#foto').change(function(){
                                        filePreview(this);
                                    });
                                })();
                            </script>
                            

                            <br><br>
                            <!--Es el combo box para los idiomas-->
                            <center><div class="input-group">
                                    <select class="custom-select" id="inputGroupSelect04" name="idioma">
                                        <!-- Se seleccionan los idiomas para la pelicula directamente de la BD-->
                                        <?php
                                        $conexion = mysqli_connect("localhost", "root", "", "CineXilotzin");
                                        $query = $conexion->query("SELECT * FROM Idioma");
                                        echo'<option selected="true" disabled="disabled"> selecciona un Idioma</option>';
                                        while ($row = $query->fetch_assoc()) {
                                            echo'<option value="' . $row['Clv_Idioma'] . '">' . $row['Nombre_Idioma'] . '</option>' . "\n";
                                        }
                                        ?>
                                    </select>
                                </div></center>
                            <!--Es el combo box para los Subtitulos-->
                            <center><div class="input-group">
                                    <select class="custom-select" id="inputGroupSelect04" name="subtitulos">								
                                        <!-- disabled selected==es el que hace la funcion de placeholder del combobox(select)-->
                                        <!-- Se seleccionan los Subtitulos si es que tiene para la pelicula directamente de la BD-->  
                                        <!--selected="true" disabled="disabled"==Hace valor por dafault del ComboBox-->  
                                        <?php
                                        $sin = "SS";
                                        $conexion = mysqli_connect("localhost", "root", "", "CineXilotzin");
                                        $query = $conexion->query("SELECT * FROM Subtitulos");
                                        echo'<option selected="true" disabled="disabled">Selecciona un Subtitulo</option> ';
                                        while ($row = $query->fetch_assoc()) {
                                            echo'<option value="' . $row['Clv_Subtitulos'] . '">' . $row['Nombre_Subtitulos'] . '</option>' . "\n";
                                        }
                                        ?>
                                    </select>
                                </div></center>
                            <!--Es el combo box para el genero-->
                            <center><div class="input-group">
                                    <select class="custom-select" id="inputGroupSelect04" name="genero">								
                                        <!-- disabled selected==es el que hace la funcion de placeholder del combobox(select)-->
                                        <!-- Se seleccionan los Subtitulos si es que tiene para la pelicula directamente de la BD-->  
                                        <!--selected="true" disabled="disabled"==Hace valor por dafault del ComboBox-->  
                                        <?php
                                        $conexion = mysqli_connect("localhost", "root", "", "CineXilotzin");
                                        $query = $conexion->query("SELECT * FROM Genero");
                                        echo'<option selected="true" disabled="disabled">Selecciona un Genero</option> ';
                                        while ($row = $query->fetch_assoc()) {
                                            echo'<option value="' . $row['Clv_Genero'] . '">' . $row['Nombre_Genero'] . '</option>' . "\n";
                                        }
                                        ?>
                                    </select>
                                </div></center>
                            <!--Es el combo box para la clasificacion-->
                            <center><div class="input-group">
                                    <select class="custom-select" id="inputGroupSelect04" name="clasificacion">								
                                        <!-- disabled selected==es el que hace la funcion de placeholder del combobox(select)-->
                                        <!-- Se seleccionan los Subtitulos si es que tiene para la pelicula directamente de la BD-->  
                                        <!--selected="true" disabled="disabled"==Hace valor por dafault del ComboBox-->  
                                        <?php
                                        $conexion = mysqli_connect("localhost", "root", "", "CineXilotzin");
                                        $query = $conexion->query("SELECT * FROM Clasificacion");
                                        echo'<option selected="true" disabled="disabled"> Selecciona una Clasificacion</option> ';
                                        while ($row = $query->fetch_assoc()) {
                                            echo'<option value="' . $row['Clv_Clasificacion'] . '">' . $row['Nombre_Clasificacion'] . '</option>' . "\n";
                                        }
                                        ?>
                                    </select>
                                </div></center>
                            
                            <!--Es el chec box para definir si es estreno principal(solo se podra seleccionar 1 por semana)-->
                            <center><div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                    <label class="form-check-label" for="defaultCheck1">
                                        Estreno Principal
                                    </label>
                                </div></center>
                            <!--botones de confirmacion y acciones-->
                            <input type="submit" value="Agregar Pelicula" class="done">
                            <input type="submit" value="Guardar Edicion de  Pelicula" class="edit">
                            <input type="submit" value="Eliminar Pelicula" class="drop">
                        </form>

                    </div>

                    <div id="Funciones" class="tab-pane fade">
                        <form action="FuncionesCod.php" method="post" enctype="multipart/form-data">
                            <h3>Funciones</h3>
                            <div class="formulario" >
                                <h2>selecciona la pelicula para su funcion</h2>
                                <center><div class="input-group">
                                        <select class="custom-select" id="inputGroupSelect04" name="peliculas" placeholder="peliculas">
                                            <!--En este script de Php muestra las peliculas que tienen-->

                                            <?php
                                            $conexion = mysqli_connect("localhost", "root", "", "CineXilotzin");
                                            $query = $conexion->query("SELECT * FROM Peliculas");
                                            echo'<option Value="0"> Selecciona una pelicula</option> ';
                                            while ($row = $query->fetch_assoc()) {
                                                echo'<option value="' . $row['idPeliculas'] . '">' . $row['Nombre_Pelicula'] . '</option>' . "\n";
                                            }
                                            ?>
                                        </select>
                                    </div></center>
                                 
                              
                                      <?php
                                $img=$conexion->query("SELECT URLImagenPelicula FROM CineXilotzin.Peliculas WHERE idPeliculas=".peliculas."");
                                            echo "$img";
                                ?>
                                <center> <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                        <label class="form-check-label" for="defaultCheck1">
                                            Hora de Estreno
                                        </label>
                                    </div></center>
                                <input type="date" placeholder="ingrese la fecha" name="fechaFunc" required>                                
                                <input type="time" placeholder="ingrese una hora" name="horaFunc"required>
                                <center><div class="input-group">
                                        <select class="custom-select" id="inputGroupSelect04" name="tipoFuncion">
                                            <option value="Funcion Principal">Funcion Principal</option>
                                            <option value="Funcion Normal">Funcion Normal</option>
                                        </select>
                                    </div></center>
                                <center><div class="input-group">
                                        <select class="custom-select" id="inputGroupSelect04" name="Salas">
                                            <option value="Sala 1">Sala 1</option>
                                            <option value="Sala 2">Sala 2</option>
                                            <option value="Sala 3">Sala 3</option>
                                        </select>
                                    </div></center>

                            </div>
                            <input type="submit" value="Agregar">
                            <input type="submit" value="Actualizar">
                        </form>      

                    </div>

                    <div id="Dulceria" class="tab-pane fade">
                        <form action="DulcesCod.php" method="post" enctype="multipart/form-data">
                            <h3>Dulceria</h3>
                            <input type="text" placeholder="Nombre del producto" required name="txtproducto"/>
                            <center><div class="input-group">
                                    <select class="custom-select" id="inputGroupSelect04" name="tipoProducto">
                                        <option selected>Tipo</option>    
                                        <option value="Bebida">Bebida</option>
                                        <option value="Snack">Snack</option>
                                    </select>

                                </div></center>
                            <input type="text" placeholder="precio del producto" required name="txtproductoprecio"/>
                            <textarea name="txaDescripcion" rows="6" cols="68" placeholder="Ingresa la descripcion del producto"></textarea> 
                            <h4>Agregar Imagen</h4>
                            <input type="file" value="Agregar imagen" name="fotoDulce" id="fotoDulce">
                            
                            <div id="imagePreviews">
                                
                            </div>
                             <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"> </script>
                          
                            <script type="text/javascript">
                                (function(){
                                    function filePreview(input){
                                        if(input.files && input.files[0]){
                                            var reader=new FileReader();
                                            reader.onload=function(e){
                                                $('#imagePreviews').html("<center><img src='"+e.target.result+"' alt='imgPelicula' width='200' height='200' border='2'></center>");
                                            }
                                            reader.readAsDataURL(input.files[0]);
                                        }
                                    }
                                    $('#fotoDulce').change(function(){
                                        filePreview(this);
                                    });
                                })();
                            </script>
                            

                            <br><br>
                           
                            <input type="submit" value="Agregar producto">
                            <input type="submit" value="Editar Producto" class="edit">
                            <input type="submit" value="Elliminar Producto" class="drop">
                        </form>
                    </div>

                    <div id="Promociones" class="tab-pane fade">
                        <form action="PromocionesCod.php" method="post" enctype="multipart/form-data">
                            <h3>Promociones</h3>
                            <input type="text" placeholder="Nombre de la promocion" required name="txtpromocion"/>
                            <input type="date" placeholder="Ingresa la fecha de inicio" required name="FechaInicioProm"/>
                            <input type="date" placeholder="Ingrese la fecha de finalizaacion" required name="FechaFinProm"/>

                            <textarea name="txaDescripcion" rows="6" cols="68" placeholder="Ingresa la descripcion de la promocion"></textarea> 
                            <center><div class="input-group">
                                    <select class="custom-select" id="inputGroupSelect04" name="tipoPromocion">
                                        <option selected>Tipo Promocion</option>    
                                        <option value="Descuento">Descuento</option>
                                        <option value="Entradas">entradas</option>
                                        <option value="Articulos">Articulos</option>
                                    </select>

                                </div></center>
                            <h4>Agregar imagen de la Promocion</h4>
                            <input type="File" value="Agregar imagen" name="fotoProm" id="fotoProm">
                           
                              
                            <div id="imagePreviewP">
                                
                            </div>
                             <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"> </script>
                          
                            <script type="text/javascript">
                                (function(){
                                    function filePreview(input){
                                        if(input.files && input.files[0]){
                                            var reader=new FileReader();
                                            reader.onload=function(e){
                                                $('#imagePreviewP').html("<center><img src='"+e.target.result+"' alt='imgPelicula' width='200' height='200' border='2'></center>");
                                            }
                                            reader.readAsDataURL(input.files[0]);
                                        }
                                    }
                                    $('#fotoProm').change(function(){
                                        filePreview(this);
                                    });
                                })();
                            </script>
                            

                            <br><br>
                            <input type="submit" value="Agregar Promocion">
                            <input type="submit" value="Editar Promocion" class="edit">
                            <input type="submit" value="Elliminar Promocion" class="drop">
                        </form>
                    </div>

                    <div id="Inf_Cine" class="tab-pane fade">
                        <form action="InfCineCod.php" method="post" enctype="multipart/form-data">
                            <h3>Informacion del cine</h3>

                            <textarea rows="6" cols="68" required placeholder="Ingresa la Historia del Cine" name="txaHistoria" ></textarea>
                            <input type="text" placeholder="link de facebok" required name="linkFaceBook"/>
                            <input type="text" placeholder="link de instagram" required name="linkInsttagram"/>
                            <input type="text" placeholder="Agregar ubicacion" required name="txtUbicacion"/>
                            <input type="text" placeholder="Telefono" required name="Telefonocine"/>
                            <input type="text" placeholder="E-Mail" required name="correoCine"/>
                            <h4>Ingresa un mapa del cine</h4>
                            <input type="file" value="Agregar mapa" name='fotoINF' id='fotoINF'>
                            
                             
                            <div id="imagePreviewINF">
                                
                            </div>
                             <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"> </script>
                          
                            <script type="text/javascript">
                                (function(){
                                    function filePreview(input){
                                        if(input.files && input.files[0]){
                                            var reader=new FileReader();
                                            reader.onload=function(e){
                                                $('#imagePreviewINF').html("<center><img src='"+e.target.result+"' alt='imgPelicula' width='200' height='200' border='2'></center>");
                                            }
                                            reader.readAsDataURL(input.files[0]);
                                        }
                                    }
                                    $('#fotoINF').change(function(){
                                        filePreview(this);
                                    });
                                })();
                            </script>
                            

                            <br><br>
                            <input type="submit" value="Actualizar ">

                        </form>
                    </div>

                    <div id="fotosCine" class="tab-pane fade">
                        <form action="AgregarFotosCineCod.php" method="post" enctype="multipart/form-data">
                            <h3>Fotos del cine</h3>
                            <h5>selecciona las fotos apra el cine</h5>
                            <input type="file" value="Agregar imagenes del cine" name="fotoMap" id="fotoMap">

                           <div id="imagePreviewMap">
                                
                            </div>
                             <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"> </script>
                          
                            <script type="text/javascript">
                                (function(){
                                    function filePreview(input){
                                        if(input.files && input.files[0]){
                                            var reader=new FileReader();
                                            reader.onload=function(e){
                                                $('#imagePreviewMap').html("<center><img src='"+e.target.result+"' alt='imgPelicula' width='200' height='200' border='2'></center>");
                                            }
                                            reader.readAsDataURL(input.files[0]);
                                        }
                                    }
                                    $('#fotoMap').change(function(){
                                        filePreview(this);
                                    });
                                })();
                            </script>
                            

                            <br><br> 
                            <input type="submit" value="Agregar ">
                            <input type="submit" value="Editar " class="edit">
                            <input type="submit" value="Elliminar" class="drop">
                        </form>
                    </div>

                    <div id="ConfDeUsuario" class="tab-pane fade">
                        <form action="UsuarioinfCod.php" method="post" enctype="multipart/form-data">
                            <h3>Configuracion de Usuario</h3>

                            <input type="password" placeholder="ingresa tu nueva contraseña" required name="NuevaCont"/>

                            <input type="submit" value="Actualizar ">


                        </form>
                    </div>

                    <div id="Reportes" class="tab-pane fade">
                        <form action="fpdf181/site/pelisfunc.php  " method="post" enctype="multipart/form-data">
                            <h3>Reportes de Usuario</h3>


                            <input type="submit" value="Ver el catalogo de peliculas ">


                        </form>
                    </div>
                </div>

                <!-- http://localhost/XiloUSERS/fpdf181/site/pelisfunc.php-->        
            </div>
            <script src="js/main.js"></script>

    </body>
</html>
 <?php
     /*                       //extraemos la imagen o foto en archivo
                            $archivo = $_FILES['foto']['tmp_name'];
                            //extraer el nombre del archivo
                            $nombreArchivo = $_FILES['foto']['name'];
                            echo '<center><img src="'.$_FILES['foto']['tmp_name'].'" alt="imgPelicula" width="200" height="200" border="2"></center>';
                            ?>