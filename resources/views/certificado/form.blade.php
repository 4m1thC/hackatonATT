<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('folio') }}
            {{ Form::text('folio', $certificado->folio, ['class' => 'form-control' . ($errors->has('folio') ? ' is-invalid' : ''), 'placeholder' => 'Folio']) }}
            {!! $errors->first('folio', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('horas_academicas') }}
            {{ Form::number('horas_academicas', $certificado->horas_academicas, ['class' => 'form-control' . ($errors->has('horas_academicas') ? ' is-invalid' : ''), 'placeholder' => 'Horas Academicas']) }}
            {!! $errors->first('horas_academicas', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('fecha_expedido') }}
            {{ Form::date('fecha_expedido', $certificado->fecha_expedido, ['class' => 'form-control' . ($errors->has('fecha_expedido') ? ' is-invalid' : ''), 'placeholder' => 'Fecha Expedido']) }}
            {!! $errors->first('fecha_expedido', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('usuario_id') }}
            {{ Form::select('usuario_id', $usuarios, $certificado->usuario_id, ['class' => 'form-control' . ($errors->has('usuario_id') ? ' is-invalid' : ''), 'placeholder' => 'Usuario Id']) }}
            {!! $errors->first('usuario_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('charla_id') }}
            {{ Form::select('charla_id', $charlas, $certificado->charla_id, ['class' => 'form-control' . ($errors->has('charla_id') ? ' is-invalid' : ''), 'placeholder' => 'Charla Id']) }}
            {!! $errors->first('charla_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>