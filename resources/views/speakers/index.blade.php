@extends('layouts.app')

@section('content')

        <div class="card-header">Salas</div>
        <div class="card-body">

            <table class="table table-bordered table-hover">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Nombre</th>
                    <th>Asistentes Max.</th>
                    <th>Accion</th>
                </tr>
                </thead>
                <tbody>

                @foreach($salas as $sala)
                    <tr>
                        <td>{{ $sala->id }}</td>
                        <td>{{ $sala->nombre }}</td>
                        <td>{{ $sala->cant_max }}</td>
                        <td>
                            <a href="{{ route('vsalas.edit', ['sala' => $sala->id]) }}">Editar</a>
                            <form method="POST" action="{{ route('vsalas.destroy', ['sala' => $sala->id]) }}" accept-charset="UTF-8">
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
