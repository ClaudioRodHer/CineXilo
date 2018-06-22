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
                        <input type="text" placeholder="Nombre de la Pelicula" required name="txtbnompelicula"/>
                        <input type="date" placeholder="Fecha de estreno:0000-00-00" required name="dtestreno"/>
                        <input type="time" placeholder="Duracion: hh-mm-ss" required name="txtDuracion"/>
                        <textarea name="txaDescripcion" rows="6" cols="68" placeholder="Ingresa la descripcion de la pelicula"></textarea> 
                        <input type="submit" value="Agregar imagen">
                        <center><img src="img/fondo2.jpg" alt="imgPelicula" width="200" height="200" border="2"></center>
                        
                        <input type="submit" value="Agregar Funciones" class="fun">
                            
                        <div class="formulario" >
                            <h2>Ingresa funcion principal</h2>
                            <form action="#">
                                <center> <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                    <label class="form-check-label" for="defaultCheck1">
                                        Hora de Estreno
                                    </label>
                                    </div></center>
                                <input type="datetime-local" placeholder="ingrese horario 0000-00-00 hh " required>
                                <h2>demas funciones</h2>
                                <input type="datetime-local" placeholder="ingrese horario 0000-00-00 hh" required>
                                <input type="submit" value="Agregar">
                                <input type="submit" value="Listo">

                            </form>      
                        </div>

                        <center><div class="input-group">
                            <select class="custom-select" id="inputGroupSelect04">
                                <option selected>Idioma</option>
                                <option value="1">Español</option>
                                <option value="2">Ingles</option>
                                <option value="3">Español(España)</option>
                                <option value="4">Frances</option>
                            </select>
                            <div class="input-group-append">
                                <button class="btn btn-outline-secondary" type="button">Aceptar</button>
                            </div>
                            </div></center>
                        <center><div class="input-group">
                            <select class="custom-select" id="inputGroupSelect04">
                                <option selected>Subtitulos</option>    
                                <option value="1">Español</option>
                                <option value="2">Ingles</option>
                                <option value="3">Español(España)</option>
                                <option value="4">Frances</option>
                            </select>
                            <div class="input-group-append">
                                <button class="btn btn-outline-secondary" type="button">Aceptar</button>
                            </div>
                            </div></center>
                        <center><div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                    <label class="form-check-label" for="defaultCheck1">
                                        Estreno Principal
                                    </label>
                            </div></center>
                        
                        <input type="submit" value="Agregar Pelicula" class="done">
                        <input type="submit" value="Agregar Nueva imagen" class="new">
                        <input type="submit" value="Editar Pelicula" class="edit">
                        <input type="submit" value="Elliminar Pelicula" class="drop">

                    </div>
                    <div id="menu1" class="tab-pane fade">
                        <h3>Dulceria</h3>
                        <input type="text" placeholder="Nombre del producto" required name="txtproducto"/>
                        <center><div class="input-group">
                                <select class="custom-select" id="inputGroupSelect04">
                                    <option selected>Tipo</option>    
                                    <option value="1">Bebida</option>
                                    <option value="2">Snack</option>
                                </select>
                                <div class="input-group-append">
                                    <button class="btn btn-outline-secondary" type="button">Aceptar</button>
                                </div>
                            </div></center>
                        <input type="text" placeholder="precio del producto" required name="txtproductoprecio"/>
                        <textarea name="txaDescripcion" rows="6" cols="68" placeholder="Ingresa la descripcion del producto"></textarea> 
                        <input type="submit" value="Agregar imagen">
                        <center><img src="img/fondo2.jpg" alt="imgPelicula" width="200" height="200" border="2"></center>
                        <input type="submit" value="Agregar producto">
                        <input type="submit" value="Editar Producto" class="edit">
                        <input type="submit" value="Elliminar Producto" class="drop">
                    </div>
                    <div id="menu2" class="tab-pane fade">
                        <h3>Promociones</h3>
                        <input type="text" placeholder="Nombre de la promocion" required name="txtpromocion"/>
                        <textarea name="txaDescripcion" rows="6" cols="68" placeholder="Ingresa la descripcion de la promocion"></textarea> 
                        <input type="submit" value="Agregar imagen">
                        <center><img src="img/fondo2.jpg" alt="imgPelicula" width="200" height="200" border="2"></center>
                        <input type="submit" value="Agregar Promocion">
                        <input type="submit" value="Editar Promocion" class="edit">
                        <input type="submit" value="Elliminar Promocion" class="drop">
                    </div>
                    <div id="menu3" class="tab-pane fade">
                        <h3>Informacion del cine</h3>
                        
                        <textarea name="txaDescripcion" rows="6" cols="68" placeholder="Ingresa la dHistoria del Cine"></textarea>
                        <input type="text" placeholder="link de facebok" required name="txtproducto"/>
                        <input type="text" placeholder="link de instagram" required name="txtproducto"/>
                        <input type="text" placeholder="Agregar ubicacion" required name="txtproducto"/>
                        <input type="text" placeholder="E-mail" required name="txtproducto"/>
                        <input type="text" placeholder="Telefono" required name="txtproducto"/>
                         <input type="submit" value="Agregar imagenes del cine">
                        <input type="submit" value="Agregar mapa">
                        <center><img src="img/fondo2.jpg" alt="imgPelicula" width="200" height="200" border="2"></center>
                        <input type="submit" value="Agregar ">
                        <input type="submit" value="Editar " class="edit">
                        <input type="submit" value="Elliminar" class="drop">
                        
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
            <script src="js/main.js"></script>
    </body>
</html>
