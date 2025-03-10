<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kits_de_robotica;

class Kits_de_roboticaController extends Controller
{
    public function index()
    {
        return response()->json(Kits_de_robotica::all());
    }

    public function store(Request $request)
    {
        $kit = Kits_de_robotica::create($request->all());
        return response()->json($kit, 201);
    }

    public function show($nombre)
    {
        return response()->json(Kits_de_robotica::findOrFail($nombre));
    }

    public function update(Request $request, $nombre)
    {
        $kit = Kits_de_robotica::findOrFail($nombre);
        $kit->update($request->all());
        return response()->json($kit);
    }

    public function destroy($nombre)
    {
        Kits_de_robotica::destroy($nombre);
        return response()->json(null, 204);
    }
}
