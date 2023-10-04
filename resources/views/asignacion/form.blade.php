<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('NombreEstudiante') }}
            {{ Form::text('NombreEstudiante', $asignacion->NombreEstudiante, ['class' => 'form-control' . ($errors->has('NombreEstudiante') ? ' is-invalid' : ''), 'placeholder' => 'Nombreestudiante']) }}
            {!! $errors->first('NombreEstudiante', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('NombreProfesor') }}
            {{ Form::text('NombreProfesor', $asignacion->NombreProfesor, ['class' => 'form-control' . ($errors->has('NombreProfesor') ? ' is-invalid' : ''), 'placeholder' => 'Nombreprofesor']) }}
            {!! $errors->first('NombreProfesor', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Materia') }}
            {{ Form::text('Materia', $asignacion->Materia, ['class' => 'form-control' . ($errors->has('Materia') ? ' is-invalid' : ''), 'placeholder' => 'Materia']) }}
            {!! $errors->first('Materia', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>