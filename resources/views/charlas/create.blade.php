@extends('layouts.app')

@section('content')

    <div class="card-header">
        Nueva Charla
    </div>
    <div class="card-body">

        <div class="">
            <div class="panel panel-default">
                <div class="panel-body">

                    <form action="{{ route('vcharlas.store') }}" method="POST">
                        {{ csrf_field() }}
                        <div class="form-group{{ $errors->has('nombre') ? ' has-error' : '' }}">
                            <label for="nombre"><h5>Nombre de la Charla</h5></label>
                            <input type="text" name="nombre" class="form-control col-md-4" value="{{ old('nombre') }}">
                            @if ($errors->has('nombre'))
                                <span class="help-block">
                                    <strong> {{ $errors->first('nombre') }} </strong>
                                </span>
                            @endif
                        </div>

                        <div class="form-group{{ $errors->has('fecha') ? ' has-error' : '' }}">
                            <label for="nombre"><h5>Fecha</h5></label>
                            <input type="text" name="fecha" value="2018-03-05 14:38:20" class="form-control col-md-4">
                            @if ($errors->has('fecha'))
                                <span class="help-block">
                                    <strong> {{ $errors->first('fecha') }} </strong>
                                </span>
                            @endif
                        </div>

                        <div class="form-group{{ $errors->has('sala_id') ? ' has-error' : '' }}">
                            <label for="sala_id"><h5>Sala</h5></label>
                            <select name="sala_id" class="form-control col-md-4">
                                @foreach($salas as $sala)
                                    <option value="{{ $sala->id }}">{{$sala->nombre}}</option>
                                @endforeach
                            </select>
                            @if ($errors->has('sala_id'))
                                <span class="help-block">
                                    <strong> {{ $errors->first('sala_id') }} </strong>
                                </span>
                            @endif
                        </div>

                        <div class="form-group{{ $errors->has('speaker_id') ? ' has-error' : '' }}">
                            <label for="speaker_id"><h5>Expositor</h5></label>
                            <select name="speaker_id" class="form-control col-md-4">
                                @foreach($speakers as $speaker)
                                    <option value="{{ $speaker->id }}">{{$speaker->nombre}}</option>
                                @endforeach
                            </select>
                            @if ($errors->has('speaker_id'))
                                <span class="help-block">
                                    <strong> {{ $errors->first('speaker_id') }} </strong>
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