<div class="modal fade" id="modal-delete-{{$estudiante->id}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <form action="{{route('estudiante.destroy', $estudiante->id)}}" method="post">
            @csrf
            @method('DELETE')
            
        
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">Eliminar Registro</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          Desea eliminar el registro de {{$estudiante->est_nombre." ".$estudiante->est_ap_paterno}}
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
          <input type="submit" class="btn btn-danger btn-sm" value="Eliminar">
        </div>
      </div>
    </form>  
    </div>
</div>