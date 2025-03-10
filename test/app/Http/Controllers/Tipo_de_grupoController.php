<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tipo_de_grupo;

class Tipo_de_grupoController extends Controller
{
    public function index()
    {
        return response()->json(Tipo_de_grupo::all());
    }

    public function store(Request $request)
    {
        $tipoGrupo = Tipo_de_grupo::create($request->all());
        return response()->json($tipoGrupo, 201);
    }

    public function show($id)
    {
        return response()->json(Tipo_de_grupo::findOrFail($id));
    }

    public function destroy($id)
    {
        Tipo_de_grupo::destroy($id);
        return response()->json(null, 204);
    }
}
