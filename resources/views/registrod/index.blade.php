@extends('layouts.app')

@section('template_title')
    Registrod
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Registrod') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('registrods.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
										<th>Colegio</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($registrods as $registrod)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $registrod->Nombre }}</td>
											<td>{{ $registrod->Apellido }}</td>
											<td>{{ $registrod->Correo }}</td>
											<td>{{ $registrod->Telefono }}</td>
											<td>{{ $registrod->Genero }}</td>
											<td>{{ $registrod->Pais }}</td>
											<td>{{ $registrod->Departamento }}</td>
											<td>{{ $registrod->Colegio }}</td>

                                            <td>
                                                <form action="{{ route('registrods.destroy',$registrod->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('registrods.show',$registrod->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('registrods.edit',$registrod->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
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
                {!! $registrods->links() !!}
            </div>
        </div>
    </div>
@endsection
