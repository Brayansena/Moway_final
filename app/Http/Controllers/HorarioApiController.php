<?php

namespace App\Http\Controllers;

use App\Models\Horario;
use Illuminate\Http\Request;

class HorarioApiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $horario = Horario::all();
        return $horario;
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
        $horario = new Horario();
        $horario->nombre_horario =$request->nombre_horario;
        $horario->Hora_inicio_semana =$request->Hora_inicio_semana;
        $horario->Hora_final_semana =$request->Hora_final_semana;
        $horario->Hora_inicio_festivo =$request->Hora_inicio_festivo;
        $horario->Hora_final_festivo =$request->Hora_final_festivo;

        $horario->save();

        return response()->json([
            'menssage' => 'success',
            'info'=>'horario creada',
            'producto'=>$horario,
        ],201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Horario  $horario
     * @return \Illuminate\Http\Response
     */
    public function show(Horario $horario)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Horario  $horario
     * @return \Illuminate\Http\Response
     */
    public function edit(Horario $horario)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Horario  $horario
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Horario $horario)
    {
        $horario = Horario::findOrFail($request->id);

        $horario->nombre_horario =$request->nombre_horario;
        $horario->Hora_inicio_semana =$request->Hora_inicio_semana;
        $horario->Hora_final_semana =$request->Hora_final_semana;
        $horario->Hora_inicio_festivo =$request->Hora_inicio_festivo;
        $horario->Hora_final_festivo =$request->Hora_final_festivo;

        $horario->save();

        return response()->json([
            'menssage' => 'success',
            'info'=>'se actualizo su informacion',
            'producto'=>$horario,

        ],201);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Horario  $horario
     * @return \Illuminate\Http\Response
     */
    public function destroy(Horario $id)
    {
        $id->delete();

        return response()->json([
            'menssage' => 'success',
            'info'=>'se elimino horario correctamente'

        ],201);
    }
}
