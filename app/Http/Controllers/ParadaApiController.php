<?php

namespace App\Http\Controllers;

use App\Models\Parada;
use Illuminate\Http\Request;

class ParadaApiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $parada = parada::all();
        return $parada;
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
        $parada=new parada();
        $parada->parada =$request->parada ;

        $parada->save();

        return response()->json([
            'menssage' => 'success',
            'info'=>'empresa creada',
            'producto'=>$parada,
        ],201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\parada  $parada
     * @return \Illuminate\Http\Response
     */
    public function show(parada $parada)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\parada  $parada
     * @return \Illuminate\Http\Response
     */
    public function edit(parada $parada)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\parada  $parada
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, parada $parada)
    {

        $parada = parada::findOrFail($request->id);
        $parada->parada =$request->parada ;
        $parada->save();

        return response()->json([
            'menssage' => 'success',
            'info'=>'se actualizo su informacion',
            'producto'=>$parada,

        ],201);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\parada  $parada
     * @return \Illuminate\Http\Response
     */
    public function destroy(parada $id)
    {
        $id->delete();

        return response()->json([
            'menssage' => 'success',
            'info'=>'se elimino punto de parada correctamente'

        ],201);
    }
}
