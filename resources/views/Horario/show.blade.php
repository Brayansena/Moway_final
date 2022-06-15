@extends('adminlte::page')

@section('template_title')
    {{ $horario->name ?? 'Show Horario' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Mirar Horario</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('horarios.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">

                        <div class="form-group">
                            <strong>Nombre Horario:</strong>
                            {{ $horario->nombre_horario }}
                        </div>

                        <div class="form-group">
                            <strong>Hora Inicio Semana:</strong>
                            {{ $horario->hora_inicio_semana }}
                        </div>
                        <div class="form-group">
                            <strong>Hora Final Semana:</strong>
                            {{ $horario->hora_final_semana }}
                        </div>
                        <div class="form-group">
                            <strong>Hora Inicio Festivo:</strong>
                            {{ $horario->hora_inicio_festivo }}
                        </div>
                        <div class="form-group">
                            <strong>Hora Final Festivo:</strong>
                            {{ $horario->hora_final_festivo }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
