<!DOCTYPE html  

<html lang="en">
    <head>
        <title>	
            Cargando...
        </title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

        <style type="text/css">
            body {
                color: white;
                background-size: 89%;
                font-family: 'Futura-Normal', arial;
                font-size: 48px;
                text-shadow: 4px 4px 4px #aaa;
            }
        </style>
    </head>

    <body style="background-image: url(cineF.png)" >
    <center><img class="img-responsive" src="fondo.png" alt="Chania" style="width: 40%"></center>
    <div class="progress" style="margin:100px">
        
        <div id="bar" class="progress-bar progress-bar-striped active" role="progressbar" 
             aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%; background-color:#FF43C6 !important;">
            <span class="sr-only">0% Complete</span>
        </div>
    </div>        
    <!-- Es el Script con el que lla barra de progreso ira creciendo cada determinado tiempo-->
    <script>
        var progreso = 0;
        var idIterval = setInterval(function () {
            // Aumento en 1 el progeso
            progreso += 1;
            $('#bar').css('width', progreso + '%');

            //Si llegó a 100 elimino el interval
            if (progreso == 100) {
                clearInterval(idIterval);
            }
        }, 40);
    </script>
    <META HTTP-EQUIV="Refresh" CONTENT="10; URL=http://localhost/XiloUSERS/Home.php">
    
