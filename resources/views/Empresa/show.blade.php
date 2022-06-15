@extends('adminlte::page')

@section('template_title')
    {{ $empresa->name ?? 'Show Empresa' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Mirar Empresa</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('empresas.index') }}"> ATRAS</a>
                        </div>
                    </div>

                    <div class="card-body">

                        <div class="form-group">
                            <strong>Nit Empresa:</strong>
                            {{ $empresa->nit_empresa }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre Empresa:</strong>
                            {{ $empresa->nombre_empresa }}
                        </div>
                        <div class="form-group">
                            <strong>Direccion Empresa:</strong>
                            {{ $empresa->direccion_empresa }}
                        </div>
                        <div class="form-group">
                            <strong>Imagen de la Empresa:</strong>
                            <td><img src="{{ asset('storage').'/'.$empresa->img_empresa }}" alt="" width="100"></td>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
