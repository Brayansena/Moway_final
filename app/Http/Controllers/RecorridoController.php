<?php

namespace App\Http\Controllers;

use App\Models\Recorrido;
use App\Models\Horario;
use App\Models\Empresa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

/**
 * Class RecorridoController
 * @package App\Http\Controllers
 */
class RecorridoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $recorridos = Recorrido::paginate();

        return view('Recorrido.index', compact('recorridos'))
            ->with('i', (request()->input('page', 1) - 1) * $recorridos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $recorrido = new Recorrido();
        $horarios=Horario::pluck('nombre_horario','id');
        $empresa=Empresa::pluck('nombre_empresa','id');
        return view('Recorrido.create', compact('recorrido','horarios','empresa'));
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
            'nombre_ruta'=>'required|string|max:100',
            'numero_ruta'=>'required|string|max:100',
            'url_recorrido'=>'required|string|max:100',
        ];
        $mensaje=[
                'required'=>'El :attribute es requerido'
        ];
        $this->validate($request,$campos,$mensaje);


        $datos_recorrido= request()->except('_token');

        if($request->hasFile('imagen_recorrido')){
            $datos_recorrido['imagen_recorrido']=$request->file('imagen_recorrido')->store('uploads','public');
        }

        Recorrido::insert($datos_recorrido);

        return redirect()->route('recorridos.index')
            ->with('success', 'Recorrido creado con exito');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $recorrido = Recorrido::find($id);

        return view('Recorrido.show', compact('recorrido'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $recorrido = Recorrido::find($id);

        $horarios=Horario::pluck('nombre_horario','id');
        $empresa=Empresa::pluck('nombre_empresa','id');

        return view('Recorrido.edit', compact('recorrido','horarios','empresa'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Recorrido $recorrido
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $campos=[
            'nombre_ruta'=>'required|string|max:100',
            'numero_ruta'=>'required|string|max:100',
            'url_recorrido'=>'required|string|max:100',
        ];
        $mensaje=[
                'required'=>'El :attribute es requerido'
        ];
        $this->validate($request,$campos,$mensaje);
        $datos_recorrido= Request()->except(['_token','_method']);

        if($request->hasFile('imagen_recorrido')){
            $recorrido=Recorrido::findOrFail($id);
            Storage::delete('public/'.$recorrido->imagen_recorrido);
            $datos_recorrido['imagen_recorrido']=$request->file('imagen_recorrido')->store('uploads','public');
        }

        Recorrido::where('id','=',$id)->update($datos_recorrido);
        $recorrido=Recorrido::findOrFail($id);


        return redirect()->route('recorridos.index')
            ->with('success', 'Recorrido actualizado con Exito');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $recorrido=Recorrido::findOrFail($id);
        if(Storage::delete('public/'.$recorrido->imagen_recorrido)){

        }
        Recorrido::destroy($id);
        return redirect()->route('recorridos.index')
            ->with('success', 'Recorrido eliminado con Exito');
    }
}
