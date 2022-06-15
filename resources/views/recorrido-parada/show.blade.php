@extends('adminlte::page')

@section('template_title')
    {{ $recorridoParada->name ?? 'Show Recorrido Parada' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Mirar Selecion de Parada</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('recorrido-paradas.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">

                        <div class="form-group">
                            <strong>Id Parada:</strong>
                            {{ $recorridoParada->id_parada }}
                        </div>
                        <div class="form-group">
                            <strong>Id Recorrido:</strong>
                            {{ $recorridoParada->id_recorrido }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
