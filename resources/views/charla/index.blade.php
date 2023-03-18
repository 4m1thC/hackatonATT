@extends('layouts.app')

@section('template_title')
    Charla
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Charla') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('charlas.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
										<th>Tema</th>
										<th>Horario</th>
										<th>Archivo</th>
										<th>Evento Id</th>
										<th>Expositor Id</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($charlas as $charla)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $charla->tema }}</td>
											<td>{{ $charla->horario }}</td>
											<td>{{ $charla->archivo }}</td>
											<td>{{ $charla->evento->nombre_evento }}</td>
											<td>{{ $charla->expositore->user->name }}</td>

                                            <td>
                                                <form action="{{ route('charlas.destroy',$charla->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('charlas.show',$charla->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('charlas.edit',$charla->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
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
                {!! $charlas->links() !!}
            </div>
        </div>
    </div>
@endsection
