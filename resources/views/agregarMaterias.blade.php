@php
    use \App\Http\Controllers\MateriaController;
    use \App\Http\Controllers\AsignacionesController;
@endphp
<div class="modal fade" id="modal-agregar-{{$estudiante->id}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <form action="{{route('asignacion.agregarMaterias', $estudiante->id)}}" method="post">
        {{-- <form method="post"> --}}
            {{-- @csrf --}}
            {{-- @method('POST') --}}
            <?php
            if(isset($_POST["submit"]))
            {
             $for_query = '';
             if(!empty($_POST["seleccion"]))
             {
              foreach($_POST["seleccion"] as $seleccion)
              {
                  echo '<h3>You have select following language</h3>';
                  echo '<label class="text-success">' . $for_query . '</label>';
              }
             }
             else
             {
              echo "<label class='text-danger'>* Please Select Atleast one Programming language</label>";
             }
            }
            ?>
        
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="staticBackdropLabel">Agregar Materias</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-header">
            Seleccione las materias que cursara el estudiante: {{$estudiante->est_nombre." ".$estudiante->est_ap_paterno}}
          </div>
        
          <div class="modal-body">
            
              <?php
                  $materias = MateriaController::listarRaw();
            
                  forEach($materias as $materia) {
                      $nombreMateria = $materia['mat_nombre'];
                      $idMateria = $materia['id'];
                      // $estado = AsignacionesController::verificarExisteMateriaEnEstudiante($estudiante->id, $idMateria);
                      $asignaciones = AsignacionesController::listarPorIdEstIdMateria($estudiante->id, $idMateria);
                    
                      echo "<label class='form-check-label' for='$idMateria' style='margin-right: 10px'>";
                          echo "$nombreMateria";
                      echo "</label>";
                      if (count($asignaciones) === 0) {
                          echo "<input class='form-check-input' type='checkbox' name='seleccion' value='' id='checkbox-$idMateria'>";
                      } else {
                          echo "<input class='form-check-input' type='checkbox' name='seleccion' value='' id='checkbox-$idMateria' checked>";
                      }
                      echo "<br>";
                  }
              ?>            
    
              {{-- @forEach(MateriaController::listarPorId($estudiante->id) as $materia) { --}}
                  {{-- <td>{{$materia->$mat_nombre}}</td> --}}
              {{-- } --}}
              {{-- @forEach($materia as $materia) { --}}
                  {{-- <tr> --}}
                      {{-- <td> --}}
                      {{-- <td><a href="{{route('estudiante.edit', $estudiante->id)}}" class="btn btn-warning btn-sm"> Editar </a> --}}
                          {{-- <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modal-delete-{{$estudiante->id}}"> --}}
                              {{-- Eliminar --}}
                          {{-- </button>  --}}
                          {{-- <button type="button" class="btn btn-secondary tn-sm" data-bs-toggle="modal" data-bs-target="#modal-delete-{{$estudiante->id}}"> --}}
                              {{-- Agregar Materias --}}
                          {{-- </button>  --}}
                          {{-- <button type="button" class="btn btn-info btn-sm" data-bs-toggle="modal" data-bs-target="#modal-delete-{{$estudiante->id}}"> --}}
                              {{-- Ver Materias --}}
                            {{-- </button>   --}}
                          {{-- <td>{{$materia->id}}</td> --}}
                      {{-- </td> --}}
                      {{-- <td>{{$estudiante->id}}</td> --}}
                      {{-- <td>{{$estudiante->est_nombre}}</td> --}}
                      {{-- <td>{{$estudiante->est_ap_paterno}}</td> --}}
                      {{-- <td>{{$estudiante->est_ap_materno}}</td> --}}
                      {{-- <td>{{$estudiante->est_ci}}</td> --}}
                      {{-- <td>{{$estudiante->est_telefono}}</td> --}}
                  {{-- </tr>                --}}
              {{-- } --}}
          </div>
          <div class="modal-footer">
            <input type="submit" class="btn btn-primary btn-sm" value="Confirmar">
          </div>
          
              </div>
        </form>  
    </div>
</div>