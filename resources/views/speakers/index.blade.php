@extends('layouts.app')

@section('content')

    <div class="card-header"><a class="btn btn-info" href="{{ route('vspeakers.create') }}">Nueva Speaker </a></div>
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

                @foreach($speakers as $speaker)
                    <tr>
                        <td>{{ $speaker->id }}</td>
                        <td>{{ $speaker->nombre }}</td>
                        <td>
                            <form method="POST" action="{{ route('vspeakers.destroy', ['speaker' => $speaker->id]) }}" accept-charset="UTF-8">
                                <a class="btn btn-warning" href="{{ route('vspeakers.edit', ['speaker' => $speaker->id]) }}">Editar</a>
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
    </div>
@endsection
