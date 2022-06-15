<?php

namespace App\Http\Controllers;

use App\Models\RecorridoParada;
use Illuminate\Http\Request;

class RecorridoParadaApiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $recorridoParada = recorridoParada::all();
        return $recorridoParada;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $recorridoParada = new recorridoParada();

        $recorridoParada->id_parada=$request->id_parada;
        $recorridoParada->id_recorrido =$request->id_recorrido;

        $recorridoParada->save();

        return response()->json([
            'menssage' => 'success',
            'info'=>'paradas y recorridos creados con exito creada',
            'producto'=>$recorridoParada,
        ],201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\recorridoParada  $recorridoParada
     * @return \Illuminate\Http\Response
     */
    public function show(recorridoParada $recorridoParada)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\recorridoParada  $recorridoParada
     * @return \Illuminate\Http\Response
     */
    public function edit(recorridoParada $recorridoParada)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\recorridoParada  $recorridoParada
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, recorridoParada $recorridoParada)
    {
        $recorridoParada = recorridoParada::findOrFail($request->id);

        $recorridoParada->id_parada=$request->id_parada;
        $recorridoParada->id_recorrido =$request->id_recorrido;

        $recorridoParada->save();

        return response()->json([
            'menssage' => 'success',
            'info'=>'se actualizo su informacion',
            'producto'=>$recorridoParada,

        ],201);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\recorridoParada  $recorridoParada
     * @return \Illuminate\Http\Response
     */
    public function destroy(recorridoParada $id)
    {
        $id->delete();

        return response()->json([
            'menssage' => 'success',
            'info'=>'se elimino recorrido correctamente'

        ],201);
    }
}
