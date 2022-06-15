<?php

namespace App\Http\Controllers;

use App\Models\Parada;
use Illuminate\Http\Request;

/**
 * Class ParadaController
 * @package App\Http\Controllers
 */
class ParadaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $paradas = Parada::paginate();

        return view('Parada.index', compact('paradas'))
            ->with('i', (request()->input('page', 1) - 1) * $paradas->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $parada = new Parada();
        return view('Parada.create', compact('parada'));
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
            'parada'=>'required|string|max:100',
        ];
        $mensaje=[
                'required'=>'El :attribute es requerido'
        ];
        $this->validate($request,$campos,$mensaje);
        request()->validate(Parada::$rules);

        $parada = Parada::create($request->all());

        return redirect()->route('paradas.index')
            ->with('success', 'Parada creada con Exito');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $parada = Parada::find($id);

        return view('Parada.show', compact('parada'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        request()->validate(Parada::$rules);
        $parada = Parada::find($id);

        return view('Parada.edit', compact('parada'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Parada $parada
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Parada $parada)
    {
        $campos=[
            'parada'=>'required|string|max:100',
        ];
        $mensaje=[
                'required'=>'El :attribute es requerido'
        ];
        $this->validate($request,$campos,$mensaje);
        request()->validate(Parada::$rules);

        $parada->update($request->all());

        return redirect()->route('paradas.index')
            ->with('success', 'Parada actualizado con Exito');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $parada = Parada::find($id)->delete();

        return redirect()->route('paradas.index')
            ->with('success', 'Parada eliminada con Exito');
    }
}
