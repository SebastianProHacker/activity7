<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Curso;

class CursoController extends Controller
{
    public function index()
    {
        return response()->json(Curso::all());
    }

    public function store(Request $request)
    {
        $curso = Curso::create($request->all());
        return response()->json($curso, 201);
    }

    public function show($id)
    {
        return response()->json(Curso::findOrFail($id));
    }

    public function update(Request $request, $id)
    {
        $curso = Curso::findOrFail($id);
        $curso->update($request->all());
        return response()->json($curso);
    }

    public function destroy($id)
    {
        Curso::destroy($id);
        return response()->json(null, 204);
    }
}
