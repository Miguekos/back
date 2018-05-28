@extends('layouts.app')

@section('content')

    <div class="card-header">Nueva Speaker</div>
    <div class="card-body">

        <div class="text-center">
            <div class="panel panel-default">
                <div class="panel-body">

                    <form action="{{ route('vspeakers.store') }}" method="POST">
                        {{ csrf_field() }}
                        <div class="form-group{{ $errors->has('nombre') ? ' has-error' : '' }}">
                            <label for="nombre"><h5>Nombre del Speaker</h5></label>
                            <input type="text" name="nombre" class="form-control" value="{{ old('nombre') }}">
                            @if ($errors->has('nombre'))
                                <span class="help-block">
                                    <strong> {{ $errors->first('nombre') }} </strong>
                                </span>
                            @endif
                        </div>
                        <button type="submit" class="btn btn-success">Guardar</button>
                    </form>
                </div>
            </div>
        </div>

    </div>
@endsection