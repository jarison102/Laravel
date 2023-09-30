@extends('layouts.app')

@section('template_title')
    {{ $registroA->name ?? "{{ __('Show') Registro A" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Registro A</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('registro-as.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $registroA->Nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Apellido:</strong>
                            {{ $registroA->Apellido }}
                        </div>
                        <div class="form-group">
                            <strong>Correo:</strong>
                            {{ $registroA->Correo }}
                        </div>
                        <div class="form-group">
                            <strong>Telefono:</strong>
                            {{ $registroA->Telefono }}
                        </div>
                        <div class="form-group">
                            <strong>Genero:</strong>
                            {{ $registroA->Genero }}
                        </div>
                        <div class="form-group">
                            <strong>Pais:</strong>
                            {{ $registroA->Pais }}
                        </div>
                        <div class="form-group">
                            <strong>Departamento:</strong>
                            {{ $registroA->Departamento }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
