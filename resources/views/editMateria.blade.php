<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Materia</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h4>Editar Materia</h4>
        <div class="row">
            <div class="col-xl-12">
                <form action="{{route('materia.update', $materia->id)}}" method="post">
                @csrf
                @method('PUT')
                    <div class="form-group">
                        <label for="mat_nombre">Nombre</label>
                        <input type="text" class="form-control" name="mat_nombre" required maxlength="50" value="{{$materia->mat_nombre}}">
                    </div>
                    
                    
                    <div class="form-group">
                        <input type="submit" class="btn btn-primary" value="Guardar">
                        <input type="reset" class="btn btn-default" value="Cancelar">
                        <a href="javascript:history.back()">Ir al Materias</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>