@extends('layouts.app')

@section('content')

    <div class="card-header">Charlas</div>
    <div class="card-body">

        <div class="text-center">
            <div class="panel panel-default">
                <div class="panel-body">

                    <h1>Charla {{ $charla->id  }}</h1>

                    <form method="post" action="{{action('VcharlasController@update', $id)}}">
                        @csrf
                        <input name="_method" type="hidden" value="PATCH">
                        <div class="row">
                            <div class="col-md-4"></div>
                            <div class="form-group col-md-4">
                                <label for="name">Nombre:</label>
                                <input type="text" class="form-control" name="nombre" value="{{$charla->nombre}}">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4"></div>
                            <div class="form-group col-md-4">
                                <label for="email">Fecha</label>
                                <input type="date" class="form-control" name="cant_max" value="{{$charla->fecha}}">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4"></div>
                            <div class="form-group col-md-4">
                                <label for="email">Sala</label>
                                <input type="text" class="form-control" name="cant_max" value="{{$charla->sala_id}}">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4"></div>
                            <div class="form-group col-md-4">
                                <label for="email">Speaker</label>
                                <input type="text" class="form-control" name="cant_max" value="{{$charla->speaker_id}}">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4"></div>
                            <div class="form-group col-md-4" style="margin-top:60px">
                                <button type="submit" class="btn btn-success" style="margin-left:38px">Update</button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>

    </div>
@endsection