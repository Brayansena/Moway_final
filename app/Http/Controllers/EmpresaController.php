<?php

namespace App\Http\Controllers;

use App\Models\Empresa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

/**
 * Class EmpresaController
 * @package App\Http\Controllers
 */
class EmpresaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $empresas = Empresa::paginate();

        return view('Empresa.index', compact('empresas'))
            ->with('i', (request()->input('page', 1) - 1) * $empresas->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $empresa = new Empresa();
        return view('Empresa.create', compact('empresa'));
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
            'nit_empresa'=>'required|string|max:100',
            'nombre_empresa'=>'required|string|max:100',
            'direccion_empresa'=>'required|string|max:100',
        ];
        $mensaje=[
                'required'=>'El :attribute es requerido',
                'img_empresa.required'=>'La foto es requerido',
        ];
        $this->validate($request,$campos,$mensaje);


        $datos_empresa= request()->except('_token');

        if($request->hasFile('img_empresa')){
            $datos_empresa['img_empresa']=$request->file('img_empresa')->store('uploads','public');
        }

        empresa::insert($datos_empresa);

        return redirect()->route('empresas.index')
            ->with('success', 'Empresa creada con Exito');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $empresa = Empresa::find($id);

        return view('Empresa.show', compact('empresa'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $empresa = Empresa::find($id);

        return view('Empresa.edit', compact('empresa'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Empresa $empresa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $campos=[
            'nit_empresa'=>'required|string|max:100',
            'nombre_empresa'=>'required|string|max:100',
            'direccion_empresa'=>'required|string|max:100',
        ];
        $mensaje=[
                'required'=>'El :attribute es requerido'
        ];
        $this->validate($request,$campos,$mensaje);
        $datos_empresa= Request()->except(['_token','_method']);

        if($request->hasFile('img_empresa')){
            $empresa=Empresa::findOrFail($id);
            Storage::delete('public/'.$empresa->img_empresa);
            $datos_empresa['img_empresa']=$request->file('img_empresa')->store('uploads','public');
        }

        Empresa::where('id','=',$id)->update($datos_empresa);
        $empresa=Empresa::findOrFail($id);


        return redirect()->route('empresas.index')
            ->with('success', 'Empresa actualizada con Exito');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $empresa=Empresa::findOrFail($id);
        if(Storage::delete('public/'.$empresa->img_empresa)){
        }
        Empresa::destroy($id);
        return redirect()->route('empresas.index')
            ->with('success', 'Empresa eliminada con Exito');
    }
}
