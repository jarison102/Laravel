@extends('layouts.app')

@section('template_title')
    {{ $asignacion->name ?? "{{ __('Show') Asignacion" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Asignacion</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('Asignacion.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombreestudiante:</strong>
                            {{ $asignacion->NombreEstudiante }}
                        </div>
                        <div class="form-group">
                            <strong>Nombreprofesor:</strong>
                            {{ $asignacion->NombreProfesor }}
                        </div>
                        <div class="form-group">
                            <strong>Materia:</strong>
                            {{ $asignacion->Materia }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
