<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Crud Inicial</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    </head>
    <body style="background-color: black;"> 
        <div class="container">
            <h1 style="color: white">Control de Puntos de Reciclaje</h1> 
            <br>

            <button type="button" class="btn btn-success" onclick="location.href='/CreaRecolector'">+ Añadir Recolector</button>
            <button type="button" class="btn btn-success" onclick="location.href='/CreaPunto'">+ Añadir Punto</button>

            <br>

            tablas con los trabajadoes y rutas  y el crud de los mismos, y boton añadir ruta
            datos trabajador- añadir ruta-editar-borrar

            el añadir ruta nos lleva a donde haremos el enlace con la otra tabla y mostraremos las rutas con el trabajador-
        </div>     
        
    </body>
</html>
