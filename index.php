<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
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

        <LINK REL=StyleSheet HREF="DarkTheme.css" TYPE="text/css" MEDI#6526A1#6526A1#6526A1A=screen>
        <style type="text/css">
            body {
                color: white;
                background-color: #000000
            }
            nav{

            }
        </style>
        
    </head>
    <body>
    <center>
        <form method="POST" action="LoginDB.php"> <!-- es para la coneccion php y html -->
        <div class="container">
        <div class="card card-container">
            <!-- <img class="profile-img-card" src="//lh3.googleusercontent.com/-6V8xOA6M7BA/AAAAAAAAAAI/AAAAAAAAAAA/rzlHcD0KYwo/photo.jpg?sz=120" alt="" /> -->
            <img id="profile-img" class="profile-img-card" src="//ssl.gstatic.com/accounts/ui/avatar_2x.png" />
            <p id="profile-name" class="profile-name-card"></p>
            <form class="form-signin">
                <span id="reauth-email" class="reauth-email"></span>
                <input type="texto" id="inputUser" class="form-control" name="txtusuario" 
                       placeholder="Usuario" required autofocus style="width : 250px; heigth : 1px" >
                <input type="password" id="inputPassword" class="form-control" name="pfpassword"
                       placeholder="Password" required style="width : 250px; heigth : 1px" >
                <div id="remember" class="checkbox">
                    <label>
                        <input type="checkbox" value="recuerdame"> Recuerdame?
                    </label>
                </div>
                <button class="btn btn-lg btn-primary btn-block btn-signin" type="Entrar" 
                        style="width : 250px; heigth : 1px" >Entrar</button>
            </form><!-- /form -->
            <a href="#" class="forgot-password">
                Olvidaste tu contraseña?
            </a>
        </div><!-- /card-container -->
    </div><!-- /container -->
        
        
<!--
        <div class="container">

            <h3>Bienvenido</h3>


            <form method="POST" action="LoginDB.php"> <!-- es para la coneccion php y html -->
<!--
                <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                    <center><input id="email" type="text" class="form-control" name="txtuser" 
                                   placeholder="Usuario" style="width : 250px; heigth : 331px">
                        </div>  

                        <div class="input-group"> 
                            <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                            <input id="password" type="password" class="form-control" name="txtpassword" 
                                   placeholder="Contraseña" style="width : 250px; heigth : 1px" >
                        </div>
                        <center> <button type="submit" >Inicar Sesion</button>
                            </form>

                            </div>

-->
        </center>   
   </body>
</html>

