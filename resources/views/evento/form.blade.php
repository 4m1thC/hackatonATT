<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('nombre_evento') }}
            {{ Form::text('nombre_evento', $evento->nombre_evento, ['class' => 'form-control' . ($errors->has('nombre_evento') ? ' is-invalid' : ''), 'placeholder' => 'Nombre Evento']) }}
            {!! $errors->first('nombre_evento', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('descripcion') }}
            {{ Form::text('descripcion', $evento->descripcion, ['class' => 'form-control' . ($errors->has('descripcion') ? ' is-invalid' : ''), 'placeholder' => 'Descripcion']) }}
            {!! $errors->first('descripcion', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('tipo_evento') }}
            {{ Form::text('tipo_evento', $evento->tipo_evento, ['class' => 'form-control' . ($errors->has('tipo_evento') ? ' is-invalid' : ''), 'placeholder' => 'Tipo Evento']) }}
            {!! $errors->first('tipo_evento', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('nro_cupos') }}
            {{ Form::text('nro_cupos', $evento->nro_cupos, ['class' => 'form-control' . ($errors->has('nro_cupos') ? ' is-invalid' : ''), 'placeholder' => 'Nro Cupos']) }}
            {!! $errors->first('nro_cupos', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('fecha') }}
            {{ Form::text('fecha', $evento->fecha, ['class' => 'form-control' . ($errors->has('fecha') ? ' is-invalid' : ''), 'placeholder' => 'Fecha']) }}
            {!! $errors->first('fecha', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>