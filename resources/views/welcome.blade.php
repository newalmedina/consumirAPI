<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
        
    </head>
    <body>
       <div class="container">
            <h1>Consumiendo Api</h1>
            <table class="table table-hover">
                <thead>
                  <tr>
                    <th>Fecha</th>
                    <th>Dolar</th>
                    <th>Euro</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                  <td>{{$dolar['fecha']}}</td>
                  <td>{{$dolar['dolar']['valor']}}</td>
                  <td>{{$dolar['euro']['valor']}}</td>
                   
                  </tr>
                 
                </tbody>
              </table>
                <br>
                <br>
                <br>
              <div class="row">
                  @foreach ($mensajes as $mensaje)                  
                    <div class="col-3 card" style="width:400px">
                        <div class="card-header">
                            <h4 class="card-title">{{$mensaje['title']}}</h4>
                        </div>               
                        <div class="card-body">
                          <p>{{$mensaje['body']}}</p>
                        </div>
                        <div class="card-footer">                  
                            <a href="#" class="btn btn-primary">See Profile</a>
                        </div>
                    </div>                        
                  @endforeach
              </div>
       </div>
    </body>
</html>
