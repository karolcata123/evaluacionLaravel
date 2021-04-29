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
        <h4>Editar Estudiante</h4>
        <div class="row">
            <div class="col-xl-12">
                <form action="{{route('estudiante.update', $estudiante->id)}}" method="post">
                @csrf
                @method('PUT')
                    <div class="form-group">
                        <label for="est_nombre">Nombre</label>
                        <input type="text" class="form-control" name="est_nombre" required maxlength="50" value="{{$estudiante->est_nombre}}">
                    </div>
                    <div class="form-group">
                        <label for="est_ap_paterno">Apellido Paterno</label>
                        <input type="text" class="form-control" name="est_ap_paterno" required maxlength="50" value="{{$estudiante->est_ap_paterno}}">
                    </div>
                    <div class="form-group">
                        <label for="est_ap_materno">Apellido Materno</label>
                        <input type="text" class="form-control" name="est_ap_materno" required maxlength="50" value="{{$estudiante->est_ap_materno}}">
                    </div>
                    <div class="form-group">
                        <label for="est_ci">CI</label>
                        <input type="text" class="form-control" name="est_ci" required maxlength="15" value="{{$estudiante->est_ci}}">
                    </div>
                    <div class="form-group">
                        <label for="est_telefono">Número de telefono</label>
                        <input type="text" class="form-control" name="est_telefono" required maxlength="15"  value="{{$estudiante->est_value}}">
                    </div>
                    
                    <div class="form-group">
                        <input type="submit" class="btn btn-primary" value="Guardar">
                        <input type="reset" class="btn btn-default" value="Cancelar">
                        <a href="javascript:history.back()">Ir al Estudiantes</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>