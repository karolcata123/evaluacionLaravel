@php
    use \App\Http\Controllers\MateriaController;
    use \App\Http\Controllers\AsignacionesController;
@endphp
<div class="modal fade" id="modal-agregar-{{$estudiante->id}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <form action="{{route('agregarMaterias',['id'=> $estudiante->id])}}" method="POST">
        @csrf

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
                          echo "<input class='form-check-input' type='checkbox' name='seleccion[]' value='$idMateria-$nombreMateria' id='checkbox-$idMateria'>";
                      } else {
                          echo "<input class='form-check-input' type='checkbox' name='seleccion[]' value='$idMateria-$nombreMateria' id='checkbox-$idMateria' checked>";
                      }
                      echo "<br>";
                  }
              ?>            
          </div>
          <div class="modal-footer">
            <input type="submit" class="btn btn-primary btn-sm" value="Confirmar">
          </div>
          
              </div>
        </form>  
    </div>
</div>