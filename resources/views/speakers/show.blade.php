@extends('layouts.app')


@section('content')

    <div class="card-header"><a class="btn btn-info" href="{{ route('vspeakers.create') }}">Nueva Speaker </a></div>
    <div class="card-body">

        <h1>ID: {{ $speaker->id }}</h1>
        <h1>Nombre: {{ $speaker->nombre }}</h1>
        <h1>Sala: {{ $speaker->cant_max}}</h1>

        <a class="btn btn-info" href="{{ url('/vspeakers') }}">Inicio</a>

    </div>
    </div>




@endsection

