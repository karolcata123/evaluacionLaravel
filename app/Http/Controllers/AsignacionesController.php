<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Asignaciones;

class AsignacionesController extends Controller
{
    public function index() {
        $asignacion = Asignaciones::all();
        return $asignacion;
    }

    public static function listarPorIdEstudiante($id) {
        $asignaciones = Asignaciones::where('id_estudiante', $id)->get();
        return $asignaciones;
    }

    public static function listarPorIdEstIdMateria($id_estudiante, $id_materia) {
        $asignaciones = Asignaciones::where([
                        ['id_estudiante', '=', $id_estudiante],
                        ['id_materia', '=', $id_materia]])
                        ->get();
        
        return $asignaciones;
    }

    public function agregarMaterias() {
        if(isset($_POST["submit"]))
        {
            $for_query = '';
            if(!empty($_POST["seleccion"]))
            {
            foreach($_POST["seleccion"] as $seleccion)
            {
                echo $seleccion;
            }
            }
            else
            {
            echo "<label class='text-danger'>* Please Select Atleast one Programming language</label>";
            }
        }
    }

    public function store(Request $request) {
        $asignacion = Asignaciones::create($request->all());
        return $asignacion;
    }

    public function destroy($id) {
        $asignacion = Asignaciones::findOrFail($id);
        $asignacion->delete();
        return $asignacion;
    }

    public function update(Request $request, $id) {
        $asignacion = Asignaciones::findOrFail($id);
        $asignacion->id_materia = $request->$id_materia;
        $asignacion->id_materia = $request->$id_estudiante;
        return $asignacion;
    }
}
