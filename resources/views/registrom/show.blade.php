@extends('layouts.app')

@section('template_title')
    {{ $registrom->name ?? "{{ __('Show') Registrom" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Registrom</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('registrom.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Materia:</strong>
                            {{ $registrom->Materia }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
