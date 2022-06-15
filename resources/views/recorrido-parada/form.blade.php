<div class="box box-info padding-1">
    <div class="box-body">

        <div class="form-group">
            {{ Form::label('Parada') }}
            {{ Form::select('id_parada', $paradas , $recorridoParada->id_parada, ['class' => 'form-control' . ($errors->has('id_parada') ? ' is-invalid' : ''), 'placeholder' => 'Nombre de la Parada']) }}
            {!! $errors->first('id_parada', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Nombre de la Ruta') }}
            {{ Form::select('id_recorrido', $recorridos , $recorridoParada->id_recorrido, ['class' => 'form-control' . ($errors->has('id_recorrido') ? ' is-invalid' : ''), 'placeholder' => 'Nombre del Recorrido']) }}
            {!! $errors->first('id_recorrido', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Registrar</button>
    </div>
</div>
