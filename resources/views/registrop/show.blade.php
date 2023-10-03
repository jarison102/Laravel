@extends('layouts.app')

@section('template_title')
    {{ $registrop->name ?? "{{ __('Show') Registrop" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Registrop</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('registrops.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $registrop->Nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Apellido:</strong>
                            {{ $registrop->Apellido }}
                        </div>
                        <div class="form-group">
                            <strong>Correo:</strong>
                            {{ $registrop->Correo }}
                        </div>
                        <div class="form-group">
                            <strong>Telefono:</strong>
                            {{ $registrop->Telefono }}
                        </div>
                        <div class="form-group">
                            <strong>Genero:</strong>
                            {{ $registrop->Genero }}
                        </div>
                        <div class="form-group">
                            <strong>Pais:</strong>
                            {{ $registrop->Pais }}
                        </div>
                        <div class="form-group">
                            <strong>Departamento:</strong>
                            {{ $registrop->Departamento }}
                        </div>
                        <div class="form-group">
                            <strong>Materia:</strong>
                            {{ $registrop->Materia }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
