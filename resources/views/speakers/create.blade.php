@extends('layouts.app')

@section('content')

    <div class="card-header">Nueva Sala</div>
    <div class="card-body">

        <div class="text-center">
            <div class="panel panel-default">
                <div class="panel-body">
                    {{ csrf_field() }}

                    <form action="{{ route('salas.store') }}" method="POST">
                        <div class="form-group{{ $errors->has('nombre') ? ' has-error' : '' }}">
                            <label for="nombre"><h5>Nombre de la Categoria</h5></label>
                            <input type="text" name="nombre" class="form-control" value="{{ old('nombre') }}">
                            @if ($errors->has('nombre'))
                                <span class="help-block">
                                    <strong> {{ $errors->first('nombre') }} </strong>
                                </span>
                            @endif
                        </div>

                        <div class="form-group{{ $errors->has('cant_max') ? ' has-error' : '' }}">
                            <label for="nombre"><h5>Asistentes Max.</h5></label>
                            <input type="text" name="cant_max" class="form-control">
                            @if ($errors->has('cant_max'))
                                <span class="help-block">
                                    <strong> {{ $errors->first('cant_max') }} </strong>
                                </span>
                            @endif
                        </div>

                        <button type="submit" class="btn btn-default">Guardar</button>
                    </form>
                </div>
            </div>
        </div>

    </div>
@endsection