@extends('layouts.app')


@section('content')

    <h1>ID: {{ $sala->id }}</h1>
    <h1>Nombre: {{ $sala->nombre }}</h1>
    <h1>Sala: {{ $sala->cant_max}}</h1>

    <a href="{{ url('/vsalas') }}">Atras</a>


@endsection

