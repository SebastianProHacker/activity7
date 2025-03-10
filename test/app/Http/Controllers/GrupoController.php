<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Grupo;

class GrupoController extends Controller
{
    public function index()
    {
        return response()->json(Grupo::all());
    }

    public function store(Request $request)
    {
        $grupo = Grupo::create($request->all());
        return response()->json($grupo, 201);
    }

    public function show($id)
    {
        return response()->json(Grupo::findOrFail($id));
    }

    public function update(Request $request, $id)
    {
        $grupo = Grupo::findOrFail($id);
        $grupo->update($request->all());
        return response()->json($grupo);
    }

    public function destroy($id)
    {
        Grupo::destroy($id);
        return response()->json(null, 204);
    }
}
