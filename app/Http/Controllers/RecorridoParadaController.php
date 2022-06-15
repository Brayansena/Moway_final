<?php

namespace App\Http\Controllers;

use App\Models\RecorridoParada;
use App\Models\Recorrido;
use App\Models\Parada;
use Illuminate\Http\Request;

/**
 * Class RecorridoParadaController
 * @package App\Http\Controllers
 */
class RecorridoParadaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $recorridoParadas = RecorridoParada::paginate();

        return view('recorrido-parada.index', compact('recorridoParadas'))
            ->with('i', (request()->input('page', 1) - 1) * $recorridoParadas->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $recorridoParada = new RecorridoParada();
        $paradas=Parada::pluck('parada','id');
        $recorridos=Recorrido::pluck('nombre_ruta','id');
        return view('recorrido-parada.create', compact('recorridoParada','paradas','recorridos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $campos=[
            'id_parada'=>'required|string|max:100',
            'id_recorrido'=>'required|string|max:100',
        ];
        $mensaje=[
                'required'=>'El :attribute es requerido'
        ];
        $this->validate($request,$campos,$mensaje);
        request()->validate(RecorridoParada::$rules);

        $recorridoParada = RecorridoParada::create($request->all());

        return redirect()->route('recorrido-paradas.index')
            ->with('success', 'Selecion de parada creado con Exito');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $recorridoParada = RecorridoParada::find($id);

        return view('recorrido-parada.show', compact('recorridoParada'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $recorridoParada = RecorridoParada::find($id);
        $paradas=Parada::pluck('parada','id');
        $recorridos=Recorrido::pluck('nombre_ruta','id');

        return view('recorrido-parada.edit', compact('recorridoParada','paradas','recorridos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  RecorridoParada $recorridoParada
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, RecorridoParada $recorridoParada)
    {
        $campos=[
            'id_parada'=>'required|string|max:100',
            'id_recorrido'=>'required|string|max:100',
        ];
        $mensaje=[
                'required'=>'El :attribute es requerido'
        ];
        $this->validate($request,$campos,$mensaje);
        request()->validate(RecorridoParada::$rules);

        $recorridoParada->update($request->all());

        return redirect()->route('recorrido-paradas.index')
            ->with('success', 'Selecion de parada actualizado con Exito');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $recorridoParada = RecorridoParada::find($id)->delete();

        return redirect()->route('recorrido-paradas.index')
            ->with('success', 'Selecion de parada eliminado con Exito');
    }
}
