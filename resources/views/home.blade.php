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

                        <h1 class="text-center">EVENTOS</h1>
                        

                    </ul>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
