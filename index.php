<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Login</title>
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
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />


        <title>Login</title>
        <link rel="stylesheet" href="css/estilos.css">
    </head>
    <body>
        <div class="contenedor-form">
          

            <div class="formulario" >
                <h2>Iniciar sesión</h2>
                <form action="validar.php" method="post">
                    <input type="text" placeholder="Usuario" required name="txtusuario">
                    <input type="password" placeholder="Contraseña" required name="txtcontraseña">
                    <input type="submit" value="Iniciar Sesión">
                </form>      
            </div>

            

            <div class="reset-password">
                <a href="#">Olvide Mi contraseña</a>
            </div>
        </div>
        <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
        <script src="js/main.js"></script>

    </body>
</html>