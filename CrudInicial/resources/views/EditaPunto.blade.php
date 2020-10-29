@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>EditaPunto</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

       </head>
    <body style="background-color: black;">
        <div class="container">
            <form action="/GuardaEdicionPunto" method="POST" >
                    @csrf
                    <br>
                    <h1 style="color: white"> Edicion Puntos de Recoleccion </h1>
                    <br>
                    <br>
                    <input type="hidden" name="id" value="{{$Punto->id}}">
                    <input type="text" class="form-control" name="tipoBasura" placeholder="Tipo de Basura" value="{{$Punto->tipoBasura}}">
                    <br>
                    <input type="text" class="form-control" name="direccion" placeholder="Direccion del Punto"  value="{{$Punto->direccion}}">
                    <br>
                    <input type="text" class="form-control" name="Apertura" placeholder="Horario de Apertura"  value="{{$Punto->horaApertura}}">
                    <br>
                    <input type="text" class="form-control" name="Cierre" placeholder="Horario de Cierre"  value="{{$Punto->horaCierre}}">
                    <br>
                   
                    <br>
                    <br>
                    <input type="submit" class="btn btn-primary">
            </form>

        </div>
    </body>
</html>
@endsection