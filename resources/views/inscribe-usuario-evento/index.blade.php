@extends('layouts.app')

@section('template_title')
    Inscribe Usuario Evento
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Inscribe Usuario Evento') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('inscribe-usuario-eventos.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
										<th>Estado de la asistencia</th>
										<th>Usuario</th>
										<th>Evento</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($inscribeUsuarioEventos as $inscribeUsuarioEvento)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $inscribeUsuarioEvento->estado_asistencia }}</td>
											<td>{{ $inscribeUsuarioEvento->users[0]->name }}</td>
											<td>{{ $inscribeUsuarioEvento->eventos[0]->nombre_evento }}</td>

                                            <td>
                                                <form action="{{ route('inscribe-usuario-eventos.destroy',$inscribeUsuarioEvento->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('inscribe-usuario-eventos.show',$inscribeUsuarioEvento->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('inscribe-usuario-eventos.edit',$inscribeUsuarioEvento->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $inscribeUsuarioEventos->links() !!}
            </div>
        </div>
    </div>
@endsection
