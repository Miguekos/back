@extends('layouts.app')

@section('content')

    <div class="card-header">Salas</div>
    <div class="card-body">

        <div class="text-center">
            <div class="panel panel-default">
                <div class="panel-body">

                    <h1>Sala {{ $sala->id  }}</h1>

                    <form method="post" action="{{action('VsalasController@update', $id)}}">
                        @csrf
                        <input name="_method" type="hidden" value="PATCH">
                        <div class="row">
                            <div class="col-md-4"></div>
                            <div class="form-group col-md-4">
                                <label for="name">Nombre:</label>
                                <input type="text" class="form-control" name="nombre" value="{{$sala->nombre}}">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4"></div>
                            <div class="form-group col-md-4">
                                <label for="email">Asist. Max.</label>
                                <input type="text" class="form-control" name="cant_max" value="{{$sala->cant_max}}">
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