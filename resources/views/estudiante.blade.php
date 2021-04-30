<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Estudiantes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

</head>
<body>
    <div class="container">
        <h4>Estudiantes</h4>
        <div class="row">
            <div class="col-xl-12">
                <form action="{{route('estudiante.index')}}" method="get">
                    <div class="row">
                        <div class="col-sm-4 my-1">
                            <input type="text" class="form-control" name="texto" value="{{$texto ?? ''}}">
                        </div>
                        <div class="col-auto my-1">
                            <input type="submit" class="btn btn-primary" value="Buscar">   
                        </div>
                        <div class="col-auto my-1">
                            <a href="{{route('estudiante.create')}}" class="btn btn-success">Nuevo</a>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-xl-12">
                <div class="table-responsive">

                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Opciones</th>
                                <th>ID</th>
                                <th>Nombre</th>
                                <th>Apellido Paterno</th>
                                <th>Apellido Materno</th>
                                <th>Carnet de Identidad</th>
                                <th>Telefono</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if (count($estudiante)<=0)
                            <tr>
                                <td colspan="8">
                                    No hay resultados
                                </td>
                            </tr>
                            @else
                            @foreach ($estudiante as $estudiante)
                                <tr>
                                    <td><a href="{{route('estudiante.edit', $estudiante->id)}}" class="btn btn-warning btn-sm"> Editar </a>
                                        <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modal-delete-{{$estudiante->id}}">
                                            Eliminar
                                        </button> 
                                        <button type="button" class="btn btn-secondary tn-sm" data-bs-toggle="modal" data-bs-target="#modal-agregar-{{$estudiante->id}}">
                                            Agregar Materias
                                        </button> 
                                        <button type="button" class="btn btn-info btn-sm" data-bs-toggle="modal" data-bs-target="#modal-ver-{{$estudiante->id}}">
                                            Ver Materias
                                          </button>  
                                    </td>
                                    <td>{{$estudiante->id}}</td>
                                    <td>{{$estudiante->est_nombre}}</td>
                                    <td>{{$estudiante->est_ap_paterno}}</td>
                                    <td>{{$estudiante->est_ap_materno}}</td>
                                    <td>{{$estudiante->est_ci}}</td>
                                    <td>{{$estudiante->est_telefono}}</td>
                                </tr>
                                @include('delete')
                                @include('agregarMaterias')
                                @include('verMaterias')
                            @endforeach
                            @endif
                        </tbody>
                    </table>

                    <br><br>
                    <a href="{{route('materia.index')}}">Ir a materias</a>

                </div>
            </div>
        </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

</html>