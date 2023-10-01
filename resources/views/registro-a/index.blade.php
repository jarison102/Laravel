@extends('layouts.app')

@section('template_title')
    Registro A
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="displa<y: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Registro A') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('registro-a.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($registroAs as $registroA)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $registroA->Nombre }}</td>
											<td>{{ $registroA->Apellido }}</td>
											<td>{{ $registroA->Correo }}</td>
											<td>{{ $registroA->Telefono }}</td>
											<td>{{ $registroA->Genero }}</td>
											<td>{{ $registroA->Pais }}</td>
											<td>{{ $registroA->Departamento }}</td>

                                            <td>
                                                <form action="{{ route('registro-as.destroy',$registroA->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('registro-as.show',$registroA->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('registro-as.edit',$registroA->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
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
                {!! $registroAs->links() !!}
            </div>
        </div>
    </div>
@endsection
