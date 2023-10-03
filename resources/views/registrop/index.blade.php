@extends('layouts.app')

@section('template_title')
    Registrop
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Registrop') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('registrop.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
										<th>Nombre</th>
										<th>Apellido</th>
										<th>Correo</th>
										<th>Telefono</th>
										<th>Genero</th>
										<th>Pais</th>
										<th>Departamento</th>
										<th>Materia</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($registrops as $registrop)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $registrop->Nombre }}</td>
											<td>{{ $registrop->Apellido }}</td>
											<td>{{ $registrop->Correo }}</td>
											<td>{{ $registrop->Telefono }}</td>
											<td>{{ $registrop->Genero }}</td>
											<td>{{ $registrop->Pais }}</td>
											<td>{{ $registrop->Departamento }}</td>
											<td>{{ $registrop->Materia }}</td>

                                            <td>
                                                <form action="{{ route('registrop.destroy',$registrop->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('registrop.show',$registrop->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('registrop.edit',$registrop->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
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
                {!! $registrops->links() !!}
            </div>
        </div>
    </div>
@endsection
