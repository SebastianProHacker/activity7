<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Estudiantes_Grupo;

class Estudiantes_GrupoController extends Controller
{
    public function index()
    {
        return response()->json(Estudiantes_Grupo::all());
    }

    public function store(Request $request)
    {
        $estudianteGrupo = Estudiantes_Grupo::create($request->all());
        return response()->json($estudianteGrupo, 201);
    }

    public function show($id)
    {
        return response()->json(Estudiantes_Grupo::findOrFail($id));
    }

    public function destroy($id)
    {
        Estudiantes_Grupo::destroy($id);
        return response()->json(null, 204);
    }
}
