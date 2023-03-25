@extends('layouts.app')

@section('template_title')
    Certificado
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Certificado') }}
                            </span>

                            <div class="float-right">
                                <a href="{{ route('certificados.create') }}" class="btn btn-primary btn-sm float-right"
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
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>

                                        <th>Folio</th>
                                        <th>Horas Academicas</th>
                                        <th>Fecha Expedido</th>
                                        <th>Usuario</th>
                                        <th>Charla</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($certificados as $certificado)
                                        <tr>
                                            <td>{{ ++$i }}</td>

                                            <td>{{ $certificado->folio }}</td>
                                            <td>{{ $certificado->horas_academicas }}</td>
                                            <td>{{ $certificado->fecha_expedido }}</td>
                                            <td>{{ $certificado->user->name }}</td>
                                            <td>{{ $certificado->charla->tema }}</td>

                                            <td>
                                                <form action="{{ route('certificados.destroy', $certificado->id) }}"
                                                    method="POST">
                                                    <a class="btn btn-sm btn-primary "
                                                        href="{{ route('certificados.pdf', $certificado->id) }}"><i
                                                            class="fa fa-fw fa-eye"></i> PDF</a>
                                                    <a class="btn btn-sm btn-primary "
                                                        href="{{ route('certificados.show', $certificado->id) }}"><i
                                                            class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success"
                                                        href="{{ route('certificados.edit', $certificado->id) }}"><i
                                                            class="fa fa-fw fa-edit"></i> Edit</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i
                                                            class="fa fa-fw fa-trash"></i> Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $certificados->links() !!}
            </div>
        </div>
    </div>
@endsection
