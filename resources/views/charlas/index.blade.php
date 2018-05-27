@extends('layouts.app')

@section('content')

        <div class="card-header"><a class="btn btn-info" href="{{ route('vcharlas.create') }}">Nueva Charla </a></div>
        <div class="card-body">

            <table class="table table-bordered table-hover">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Nombre</th>
                    <th>Accion</th>
                </tr>
                </thead>
                <tbody>

                @foreach($charlas as $charla)
                    <tr>
                        <td>{{ $charla->id }}</td>
                        <td>{{ $charla->nombre }}</td>
                        <td>
                            <form method="POST" action="{{ route('vcharlas.destroy', ['charla' => $charla->id]) }}" accept-charset="UTF-8">
                                <a class="btn btn-warning" href="{{ route('vcharlas.edit', ['charla' => $charla->id]) }}">Editar</a>
                                <input name="_method" type="hidden" value="DELETE">
                                <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                                <input class="btn btn-danger" type="submit" value="Delete">
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
@endsection
