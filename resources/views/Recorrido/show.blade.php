@extends('adminlte::page')

@section('template_title')
    {{ $recorrido->name ?? 'Show Recorrido' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Mirar Recorrido</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('recorridos.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">

                        <div class="form-group">
                            <strong>Nombre ruta:</strong>
                            {{ $recorrido->nombre_ruta }}
                        </div>

                        <div class="form-group">
                            <strong>Numero Ruta:</strong>
                            {{ $recorrido->numero_ruta }}
                        </div>
                        <div class="form-group">
                            <strong>Url Recorrido:</strong>
                            {{ $recorrido->url_recorrido }}
                        </div>
                        <div class="form-group">
                            <strong>Imagen Recorrido:</strong>
                            <td><img src="{{ asset('storage').'/'.$recorrido->imagen_recorrido }}" alt="" width="100"></td>
                        </div>
                        <div class="form-group">
                            <strong>Id Horario:</strong>
                            {{ $recorrido->id_horario }}
                        </div>
                        <div class="form-group">
                            <strong>Id Empresa:</strong>
                            {{ $recorrido->id_empresa }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
