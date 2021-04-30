<?php

namespace App\Http\Controllers;

use App\Models\Estudiante;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EstudianteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $texto = trim($request->get('texto'));
        $estudiante = DB::table('estudiantes')->select('id', 'est_nombre', 'est_ap_paterno', 'est_ap_materno', 'est_ci', 'est_telefono', 'est_activo')
                                            ->where('est_ap_paterno', 'LIKE', '%'.$texto.'%')
                                            ->orWhere('est_ci', 'LIKE', '%'.$texto.'%')
                                            ->orderBy('est_ap_paterno', 'asc')
                                            ->paginate(10);
                                            
        // $estudiante = Estudiante::all();
        // return $estudiante;
        return view('estudiante', compact('estudiante', 'texto'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $estudiante = new Estudiante;
        $estudiante->est_nombre = $request->input('est_nombre');
        $estudiante->est_ap_paterno = $request->input('est_ap_paterno');
        $estudiante->est_ap_materno = $request->input('est_ap_materno');
        $estudiante->est_ci = $request->input('est_ci');
        $estudiante->est_telefono = $request->input('est_telefono');
        $estudiante->save();
        return redirect()->action([EstudianteController::class, 'index']);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Estudiante  $estudiante
     * @return \Illuminate\Http\Response
     */
    public function show(Estudiante $estudiante)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Estudiante  $estudiante
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $estudiante = Estudiante::findOrFail($id);
        
        return view('edit', compact('estudiante'));

        // $estudiante = Estudiante::find($request->id);
        // $estudiante->est_nombre = $request->est_nombre;
        // $estudiante->est_ap_paterno = $request->est_ap_paterno;
        // $estudiante->est_ap_materno = $request->est_ap_materno;
        // $estudiante->est_ci = $request->est_ci;
        // $estudiante->est_telefono = $request->est_telefono;
        
        
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Estudiante  $estudiante
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $estudiante = Estudiante::findOrFail($id);
        $estudiante->est_nombre = $request->input('est_nombre');
        $estudiante->est_ap_paterno = $request->input('est_ap_paterno');
        $estudiante->est_ap_materno = $request->input('est_ap_materno');
        $estudiante->est_ci = $request->input('est_ci');
        $estudiante->est_telefono = $request->input('est_telefono');
        $estudiante->save();
        return redirect()->action([EstudianteController::class, 'index']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Estudiante  $estudiante
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $estudiante = Estudiante::findOrFail($id);
        $estudiante->delete();
        return redirect()->action([EstudianteController::class, 'index']);
    }
}
