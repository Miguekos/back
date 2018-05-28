@extends('layouts.app')

@section('content')

    <div class="card-header">Speaker</div>
    <div class="card-body">

        <div class="text-center">
            <div class="panel panel-default">
                <div class="panel-body">

                    <h1>Speaker {{ $speaker->id  }}</h1>

                    <form method="post" action="{{action('VspeakersController@update', $id)}}">
                        @csrf
                        <input name="_method" type="hidden" value="PATCH">
                        <div class="row">
                            <div class="col-md-4"></div>
                            <div class="form-group col-md-4">
                                <label for="name">Nombre:</label>
                                <input type="text" class="form-control" name="nombre" value="{{$speaker->nombre}}">
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