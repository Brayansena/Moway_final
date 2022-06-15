<div class="box box-info padding-1">
    <div class="box-body">

        <div class="form-group">
            {{ Form::label('Nombre del Horario') }}
            {{ Form::text('nombre_horario', $horario->nombre_horario, ['class' => 'form-control' . ($errors->has('nombre_horario') ? ' is-invalid' : ''), 'placeholder' => 'Nombre del Horario']) }}
            {!! $errors->first('nombre_horario', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('hora_inicio_semana') }}
            {{ Form::time('hora_inicio_semana', $horario->hora_inicio_semana, ['class' => 'form-control' . ($errors->has('hora_inicio_semana') ? ' is-invalid' : ''), 'placeholder' => 'Hora Inicio Semana']) }}
            {!! $errors->first('hora_inicio_semana', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('hora_final_semana') }}
            {{ Form::time('hora_final_semana', $horario->hora_final_semana, ['class' => 'form-control' . ($errors->has('hora_final_semana') ? ' is-invalid' : ''), 'placeholder' => 'Hora Final Semana']) }}
            {!! $errors->first('hora_final_semana', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('hora_inicio_festivo') }}
            {{ Form::time('hora_inicio_festivo', $horario->hora_inicio_festivo, ['class' => 'form-control' . ($errors->has('hora_inicio_festivo') ? ' is-invalid' : ''), 'placeholder' => 'Hora Inicio Festivo']) }}
            {!! $errors->first('hora_inicio_festivo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('hora_final_festivo') }}
            {{ Form::time('hora_final_festivo', $horario->hora_final_festivo, ['class' => 'form-control' . ($errors->has('hora_final_festivo') ? ' is-invalid' : ''), 'placeholder' => 'Hora Final Festivo']) }}
            {!! $errors->first('hora_final_festivo', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Registrar</button>
    </div>
</div>
