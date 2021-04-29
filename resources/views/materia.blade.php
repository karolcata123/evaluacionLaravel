<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Materias</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

</head>
<body>
    <div class="container">
        <h4>Materias</h4>
        <div class="row">
            <div class="col-xl-12">
                <form action="{{route('materia.index')}}" method="get">
                    <div class="row">
                        <div class="col-sm-4 my-1">
                            <input type="text" class="form-control" name="texto" value="{{$texto ?? ''}}">
                        </div>
                        <div class="col-auto my-1">
                            <input type="submit" class="btn btn-primary" value="Buscar">   
                        </div>
                        <div class="col-auto my-1">
                            <a href="{{route('materia.create')}}" class="btn btn-success">Nuevo</a>
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
                                <th>Nombre de la Materia</th>
                            
                            </tr>
                        </thead>
                        <tbody>
                            @if (count($materia)<=0)
                            <tr>
                                <td colspan="8">
                                    No hay resultados
                                </td>
                            </tr>
                            @else
                            @foreach ($materia as $materia)
                                <tr>
                                    <td><a href="{{route('materia.edit', $materia->id)}}" class="btn btn-warning btn-sm"> Editar </a>
                                        <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modal-delete-{{$materia->id}}">
                                            Eliminar
                                          </button>  
                                    </td>
                                    <td>{{$materia->id}}</td>
                                    <td>{{$materia->mat_nombre}}</td>
                                    
                                </tr>
                                @include('deleteMateria')
                            @endforeach
                            @endif
                        </tbody>
                    </table>
                   
                </div>
            </div>
        </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

</html>