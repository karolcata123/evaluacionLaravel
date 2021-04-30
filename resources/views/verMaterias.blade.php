@php
    use \App\Http\Controllers\MateriaController;
    use \App\Http\Controllers\AsignacionesController;
@endphp
<div class="modal fade" id="modal-ver-{{$estudiante->id}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <form method="POST">
        @csrf

        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="staticBackdropLabel">Agregar Materias</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-header">
            Materias asignadas para el estudiante: {{$estudiante->est_nombre." ".$estudiante->est_ap_paterno}}
          </div>
        
          <div class="modal-body">
            
              <?php
                  $materias = MateriaController::listarRaw();
            
                  forEach($materias as $materia) {
                      $nombreMateria = $materia['mat_nombre'];
                      $idMateria = $materia['id'];
                      // $estado = AsignacionesController::verificarExisteMateriaEnEstudiante($estudiante->id, $idMateria);
                      $asignaciones = AsignacionesController::listarPorIdEstIdMateria($estudiante->id, $idMateria);
                    
                      if (count($asignaciones) === 0) {
                          
                      } else {
                          echo $nombreMateria;
                      }
                      echo "<br>";
                  }
              ?>            
          </div>
              </div>
        </form>  
    </div>
</div>