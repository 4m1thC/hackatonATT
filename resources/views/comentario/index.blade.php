@extends('layouts.app')

@section('template_title')
    Comentario
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Seccion de Comentarios: aca puedes gestionar todos los comentarios que realizaste') }}
                            </span>

                            <div class="float-right">
                                <a href="{{ route('comentarios.create') }}" class="btn btn-primary btn-sm float-right"
                                    data-placement="left">
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
                                <tbody>
                                    @foreach ($comentarios as $comentario)
                                        @if (auth()->user()->id == $comentario->usuario_id)
                                            <tr>
                                                <td>{{ ++$i }}</td>

                                                <td>{{ $comentario->contenido }}</td>
                                                <td>{{ $comentario->user->name }}</td>
                                                <td>
                                                    <form action="{{ route('comentarios.destroy', $comentario->id) }}"
                                                        method="POST">
                                                        <a class="btn btn-sm btn-primary "
                                                            href="{{ route('comentarios.show', $comentario->id) }}"><i
                                                                class="fa fa-fw fa-eye"></i> Show</a>
                                                        <a class="btn btn-sm btn-success"
                                                            href="{{ route('comentarios.edit', $comentario->id) }}"><i
                                                                class="fa fa-fw fa-edit"></i> Edit</a>
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger btn-sm"><i
                                                                class="fa fa-fw fa-trash"></i> Delete</button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endif
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $comentarios->links() !!}
            </div>
        </div>
    </div>
@endsection
