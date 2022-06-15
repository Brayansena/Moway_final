@extends('adminlte::page')

@section('template_title')
    {{ $parada->name ?? 'Show Parada' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Mirar Parada</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('paradas.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">

                        <div class="form-group">
                            <strong>Parada:</strong>
                            {{ $parada->parada }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
