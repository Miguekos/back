@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Administrar Eventos</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <ul>

                        <li><a href="{{ route('vsalas.index')  }}">Salas</a></li>
                        <li><a href="{{ route('vspeakers.index') }}">Speakers</a></li>
                        <li><a href="{{ route('vcharlas.index') }}">Charlas</a></li>

                    </ul>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
