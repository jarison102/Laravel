@extends('layouts.app')

@section('template_title')
    {{ $registrod->name ?? "{{ __('Show') Registrod" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Registrod</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('registrods.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $registrod->Nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Apellido:</strong>
                            {{ $registrod->Apellido }}
                        </div>
                        <div class="form-group">
                            <strong>Correo:</strong>
                            {{ $registrod->Correo }}
                        </div>
                        <div class="form-group">
                            <strong>Telefono:</strong>
                            {{ $registrod->Telefono }}
                        </div>
                        <div class="form-group">
                            <strong>Genero:</strong>
                            {{ $registrod->Genero }}
                        </div>
                        <div class="form-group">
                            <strong>Pais:</strong>
                            {{ $registrod->Pais }}
                        </div>
                        <div class="form-group">
                            <strong>Departamento:</strong>
                            {{ $registrod->Departamento }}
                        </div>
                        <div class="form-group">
                            <strong>Colegio:</strong>
                            {{ $registrod->Colegio }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
