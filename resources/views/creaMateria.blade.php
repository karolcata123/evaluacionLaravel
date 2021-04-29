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
        <h4>Nueva Materia</h4>
        <div class="row">
            <div class="col-xl-12">
                <form action="{{route('materia.store')}}" method="post">
                @csrf
                    <div class="form-group">
                        <label for="mat_nombre">Nombre de la Materia</label>
                        <input type="text" class="form-control" name="mat_nombre" required maxlength="50">
                    </div>
                    
                    
                    <div class="form-group">
                        <input type="submit" class="btn btn-primary" value="Guardar">
                        <input type="reset" class="btn btn-default" value="Cancelar">
                        <a href="javascript:history.back()">Ir a Materias</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>