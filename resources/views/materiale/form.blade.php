<div class="box box-info padding-1">
    <div class="box-body">

        <div class="form-group">
            {{ Form::label('Evento') }}
            {{ Form::select('evento_id', $eventos, $materiale->evento_id, ['class' => 'form-control' . ($errors->has('evento_id') ? ' is-invalid' : ''), 'placeholder' => 'Evento']) }}
            {!! $errors->first('evento_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('nombre_materiales') }}
            {{ Form::text('nombre_materiales', $materiale->nombre_materiales, ['class' => 'form-control' . ($errors->has('nombre_materiales') ? ' is-invalid' : ''), 'placeholder' => 'Nombre Materiales']) }}
            {!! $errors->first('nombre_materiales', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('tipo') }}
            {{ Form::select('tipo', $tipos, $materiale->tipo, ['class' => 'form-control' . ($errors->has('tipo') ? ' is-invalid' : ''), 'placeholder' => 'Tipo']) }}
            {!! $errors->first('tipo', '<div class="invalid-feedback">:message</div>') !!}
        </div>

        <div class="form-group">
            {{ Form::label('archivo') }}
            <br>
            <form class="form-group" enctype="multipart/form-data">
                <input type="file" name="archivo" id="">
            </form>
        </div>



    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>
