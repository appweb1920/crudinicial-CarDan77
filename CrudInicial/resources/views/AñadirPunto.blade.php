<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Añadir Punto</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

       </head>
    <body style="background-color: black;">
        <div class="container">
            <form action="/GuardaDetalle" method="POST" >
                    @csrf
                    <br>
                    <h1 style="color: white"> Añadir Puntos de Recoleccion </h1>
                    <br>
                    <br>
                    <input type="hidden" name="id" value="{{$Recolector->id}}">
                    <input type="text" class="form-control" name="idrecolector"  value="{{$Recolector->id}}">
                    <br>
                    <label>id Punto</label>
                    <select class="custom-select" name="idpunto">
                      <option selected>Selecciona id punto</option>
                      @foreach ($puntos as $p)
                      
                      <option>{{$p->id}} </option> 
                      
                      
                      @endforeach

                  
                      
                    </select>
                   
                    <br>
                    <br>
                    <input type="submit" class="btn btn-primary">
            </form>

        </div>
    </body>
</html>
