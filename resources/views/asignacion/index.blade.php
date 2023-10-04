@extends('layouts.app')

@section('template_title')
    Asignacion
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Asignacion') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('Asignacion.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>Nombreestudiante</th>
										<th>Nombreprofesor</th>
										<th>Materia</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($asignacions as $asignacion)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $asignacion->NombreEstudiante }}</td>
											<td>{{ $asignacion->NombreProfesor }}</td>
											<td>{{ $asignacion->Materia }}</td>

                                            <td>
                                                <form action="{{ route('Asignacion.destroy',$asignacion->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('Asignacion.show',$asignacion->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('Asignacion.edit', $asignacion->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> {{ __('Delete') }}</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $asignacions->links() !!}
            </div>
        </div>
    </div>
@endsection
