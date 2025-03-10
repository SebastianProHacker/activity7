<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cursos_Grupo;

class Cursos_GrupoController extends Controller
{
    public function index()
    {
        return response()->json(Cursos_Grupo::all());
    }

    public function store(Request $request)
    {
        $cursoGrupo = Cursos_Grupo::create($request->all());
        return response()->json($cursoGrupo, 201);
    }

    public function show($id)
    {
        return response()->json(Cursos_Grupo::findOrFail($id));
    }

    public function destroy($id)
    {
        Cursos_Grupo::destroy($id);
        return response()->json(null, 204);
    }
}
