<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('estado_asistencia') }}
            {{ Form::text('estado_asistencia', $inscribeUsuarioEvento->estado_asistencia, ['class' => 'form-control' . ($errors->has('estado_asistencia') ? ' is-invalid' : ''), 'placeholder' => 'Estado Asistencia']) }}
            {!! $errors->first('estado_asistencia', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('usuario_id') }}
            {{ Form::text('usuario_id', $inscribeUsuarioEvento->usuario_id, ['class' => 'form-control' . ($errors->has('usuario_id') ? ' is-invalid' : ''), 'placeholder' => 'Usuario Id']) }}
            {!! $errors->first('usuario_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('evento_id') }}
            {{ Form::text('evento_id', $inscribeUsuarioEvento->evento_id, ['class' => 'form-control' . ($errors->has('evento_id') ? ' is-invalid' : ''), 'placeholder' => 'Evento Id']) }}
            {!! $errors->first('evento_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>