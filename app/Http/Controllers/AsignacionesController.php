<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Asignaciones;
use App\Models\Estudiante;

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

    public function agregarMaterias(Request $request, $id) {
        $seleccionados = $request->input('seleccion');

        $borrados = Asignaciones::where('id_estudiante', $id)->delete();

        if (empty($seleccionados)) {

        } else {
            forEach($seleccionados as $seleccion) {
                $separacion = explode('-', $seleccion);
                $idMateria = (int)$separacion[0];
                $nombreMateria = $separacion[1];

                $asignacionCreada = Asignaciones::create([
                    'id_estudiante' => $id,
                    'id_materia' => $idMateria,
                    'mat_nombre' => $nombreMateria,
                ]);
            }
        }

        return redirect()->action([EstudianteController::class, 'index']);
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