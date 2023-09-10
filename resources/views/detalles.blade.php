@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}

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


                        <tr>
                            <th scope="row">{{ $characterDetails['id'] }}</th>
                            <td>{{ $characterDetails['name'] }}</td>
                            <td>{{ $characterDetails['status'] }}</td>
                            <td>{{ $characterDetails['species'] }}</td>
                            <td>
                                
                            </td>
                        </tr>
       

                    </tbody>
                </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
