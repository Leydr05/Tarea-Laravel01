<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</head>
<body class="bg-ligth">
   <div class="container shadow bg-white">
    <div class="row">
        <div class="col-sm-12">
         <h1>
            Larabel Crud-MVC
        </h1>
    </div>
    <div class="col-sm-12 ">
        <a href="{{ route('tarea.create') }}" class="btn btn-link" > Crear nueva tarea</a>
        <a href="" class="btn btn-link" > Lista de tareas</a>
    </div>
    <div class= ".col-sm-12" >
        @yield('contenido')
    </div>
    <div>
   </div>
</body>
</html>