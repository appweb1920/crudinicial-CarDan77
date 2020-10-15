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
            

            <button type="button" class="btn btn-success" onclick="location.href='/CreaRecolector'">+ Añadir Recolector</button>
            <button type="button" class="btn btn-success" onclick="location.href='/CreaPunto'">+ Añadir Punto</button>

            
            <br>

            <h1 style="color: white">Tabla Recolectores</h1>
            <table class="table table-bordered table-light">
                <thead>
                    <tr >
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Dias de Servicio</th>
                        <th></th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($recolectores as $r)
                    <tr>
                    <td>{{$r->id}}</td>    
                    <td>{{$r->nombre}}</td>
                    <td>{{$r->dias}}</td>
                    <td><a href="/añadir/{{$r->id}}">+ Añadir Punto</a> </td>
                    <td><a href="/edita/{{$r->id}}">Edita</a> </td>
                    <td><a href="/borra/{{$r->id}}">Borrar</a></td>
                   
                    </tr>
                    @endforeach
                    
                </tbody>
            </table>

            <br>
         

            <h1 style="color: white">Tabla Puntos</h1>
            <table class="table table-bordered table-light">
                <thead>
                    <tr >
                        <th>ID</th>
                        <th>Tipo de Basura</th>
                        <th>Direccion</th>
                        <th>Hora de Apertura</th>
                        <th>Hora de Cierre</th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($puntos as $p)
                    <tr>
                    <td>{{$p->id}}</td>    
                    <td>{{$p->tipoBasura}}</td>
                    <td>{{$p->direccion}}</td>
                    <td>{{$p->horaApertura}}</td>
                    <td>{{$p->horaCierre}}</td>
                    <td><a href="/editaPunto/{{$p->id}}">Edita</a> </td>
                    <td><a href="/borraPunto/{{$p->id}}">Borrar</a></td>
                   
                    </tr>
                    @endforeach
                    
                </tbody>
            </table>

            <br>
            
            <h1 style="color: white">Tabla Detalles</h1>
            <table class="table table-bordered table-light">
                <thead>
                    <tr >
                        <th>ID</th>
                        <th>id_recolector</th>
                        <th>id_punto</th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($detalles as $d)
                    <tr>
                    <td>{{$d->id}}</td>    
                    <td>{{$d->id_recolector}}</td>
                    <td>{{$d->id_punto}}</td>
                    <td><a href="/editadetalle/{{$d->id}}">Edita</a> </td>
                    <td><a href="/borradetalle/{{$d->id}}">Borrar</a></td>
                   
                    </tr>
                    @endforeach
                    
                </tbody>
            </table>
           

              </div>     
        
    </body>
</html>
