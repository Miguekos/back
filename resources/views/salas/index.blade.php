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
                        <td><a href="{{ route('vsalas.edit', ['sala' => $sala->id]) }}">Editar</a></td>
                    </tr>
                @endforeach

                </tbody>
            </table>

        </div>
@endsection
