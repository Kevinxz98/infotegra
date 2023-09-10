@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10 col-sm-12">
            <div class="card">
                <div class="card-header">{{ __('Personajes de la API') }} - {{$cantidad}} Registros</div>

                <div class="card-body">

                    <table class="table">
                          <thead>
                            <tr>
                              <th scope="col">id</th>
                              <th scope="col">name</th>
                              <th scope="col">status</th>
                              <th scope="col">species</th>
                              <th scope="col"></th>
                            </tr>
                          </thead>
                          <tbody>

                    @foreach($usuarios as $usuario)
                            <tr>
                              <th scope="row">{{ $usuario['id'] }}</th>
                              <td>{{ $usuario['name'] }}</td>
                              <td>{{ $usuario['status'] }}</td>
                              <td>{{ $usuario['species'] }}</td>
                              <td><a href="{{ route('detalle', $usuario['id'] ) }}" class="btn btn-sm btn-primary">Detalle</a></td>
                            </tr>
                    @endforeach
                    </tbody>
                </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection