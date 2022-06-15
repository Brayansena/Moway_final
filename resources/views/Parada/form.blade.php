<div class="box box-info padding-1">
    <div class="box-body">

        <div class="form-group">
            {{ Form::label('parada') }}
            {{ Form::text('parada', $parada->parada, ['class' => 'form-control' . ($errors->has('parada') ? ' is-invalid' : ''), 'placeholder' => 'Parada']) }}
            {!! $errors->first('parada', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Registrar</button>
    </div>
</div>
