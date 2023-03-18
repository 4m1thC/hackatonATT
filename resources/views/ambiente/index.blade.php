@extends('layouts.app')

@section('template_title')
    Ambiente
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Ambiente') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('ambientes.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
										<th>Nombre Ambiente</th>
										<th>Direccion</th>
										<th>Descripcion</th>
										<th>Evento</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($ambientes as $ambiente)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $ambiente->nombre_ambiente }}</td>
											<td>{{ $ambiente->direccion }}</td>
											<td>{{ $ambiente->descripcion }}</td>
											<td>{{ $ambiente->evento->nombre_evento }}</td>

                                            <td>
                                                <form action="{{ route('ambientes.destroy',$ambiente->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('ambientes.show',$ambiente->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('ambientes.edit',$ambiente->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
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
                {!! $ambientes->links() !!}
            </div>
        </div>
    </div>
@endsection
