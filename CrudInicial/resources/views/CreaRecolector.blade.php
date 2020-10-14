<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>CreaRecolector</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

       </head>
    <body style="background-color: black;">
        <div class="container">
            <form action="/guardaRecolector" method="POST" enctype="multipart/form-data">
                    @csrf
                    <br>
                    <h1 style="color: white">Recoletores </h1>
                    <br>
                    <br>
                    <input type="text" class="form-control" name="nombre" placeholder="Nombre">
                    <br>
                    <select class="custom-select" name="dias">
                        <option selected>Selecciona Dias de Trabajo</option>
                        <option>Lunes-Miercoles-Viernes</option>
                        <option>Martes-Jueves-Sabado</option>
                    </select>
                    <br>
                    <br>
                    <input type="submit" class="btn btn-primary">
            </form>

        </div>
    </body>
</html>
