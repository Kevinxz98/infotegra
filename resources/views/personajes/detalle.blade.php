@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <a class="btn btn-sm btn-primary my-2" href="{{ route('home') }}">Volver</a>

            <div class="card">
                <div class="card-header">{{ $characterDetails['name'] }}</div>

                <div class="card-body row">

                    <div style="border-right: 1px solid rgba(0,0,0,0.3);" class="img col-md-4 text-center">
                        <img class="img-thumbnail rounded" width="200" src="{{ $characterDetails['image'] }}">
                    </div>  

                    <div class="info col-md-6">
                        <ul class="list-group">
                          <li class="list-group-item">Tipo: {{ $characterDetails['type'] }}</li>
                          <li class="list-group-item">Genero: {{ $characterDetails['gender'] }}</li>
                          <li class="list-group-item">Nombre: {{ $characterDetails['origin']['name'] }}</li>
                          <li class="list-group-item">Url: {{ $characterDetails['origin']['url'] }}</li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
