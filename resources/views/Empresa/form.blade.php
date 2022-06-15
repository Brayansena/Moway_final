@if(count($errors)>0)
<div class="alert alert-danger" role="alert">
    <ul>
        @foreach( $errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<div class="box box-info padding-1">
    <div class="box-body">

        <div class="form-group">
            {{ Form::label('nit_empresa') }}
            {{ Form::text('nit_empresa', $empresa->nit_empresa, ['class' => 'form-control' . ($errors->has('nit_empresa') ? ' is-invalid' : ''), 'placeholder' => 'Nit Empresa']) }}
            {!! $errors->first('nit_empresa', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('nombre_empresa') }}
            {{ Form::text('nombre_empresa', $empresa->nombre_empresa, ['class' => 'form-control' . ($errors->has('nombre_empresa') ? ' is-invalid' : ''), 'placeholder' => 'Nombre Empresa']) }}
            {!! $errors->first('nombre_empresa', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('direccion_empresa') }}
            {{ Form::text('direccion_empresa', $empresa->direccion_empresa, ['class' => 'form-control' . ($errors->has('direccion_empresa') ? ' is-invalid' : ''), 'placeholder' => 'Direccion Empresa']) }}
            {!! $errors->first('direccion_empresa', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('img_empresa') }}
            {{ Form::text('img_empresa', $empresa->img_empresa, ['class' => 'form-control' . ($errors->has('img_empresa') ? ' is-invalid' : ''), 'placeholder' => 'Imagen de la empresa']) }}
            {!! $errors->first('img_empresa', '<div class="invalid-feedback">:message</div>') !!}
        </div>

        <div class="form-group">
            {{ Form::label('img_empresa') }}
            <br>

        <div class="col-md-16">
            <input id="img_empresa" name="img_empresa" type="file" placeholder="Imagen de la empresa" class="form-control" >
        </div>
        </div>
        @if(isset($empresa->img_empresa))
        <img width="100" src="{{ asset('storage').'/'.$empresa->img_empresa }}" alt="">
        @endif
        <br>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Registrar</button>
    </div>
</div>
