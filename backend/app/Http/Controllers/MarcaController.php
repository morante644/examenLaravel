<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Marca;

class MarcaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json(Marca::all());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre'=>'required',
            'descripcion'=>'required'
        ]);

        $marca = Marca::create($request->all());

        return response()->json([
            'mensaje'=>'marca creada correctamente',
            'marca'=>$marca
        ],201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $marca = Marca::find($id);
        if(!$marca){
            return response()->json(
                [
                    'mensaje'=>'marca no encontrada'
                ], 404
            );
        }

        return response()->json([
            'mensaje'=>'marca encontrada correctamente',
            'marca'=>$marca
        ],201);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nombre'=>'required',
            'descripcion'=>'required'
        ]);

        $marca = Marca::find($id);
        if(!$marca){
            return response()->json(
                [
                    'mensaje'=>'marca no encontrada'
                ], 404
            );
        }

        $marca->update($request->all());
        return response()->json([
            'mensaje'=>'marca actualizada correctamente',
            'marca'=>$marca
        ],201);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $marca = Marca::find($id);
        if(!$marca){
            return response()->json(
                [
                    'mensaje'=>'marca no encontrada'
                ], 404
            );
        }

        $marca->delete();
        return response()->json([
            'mensaje'=>'marca eliminada correctamente'
        ],200);
    }
}
