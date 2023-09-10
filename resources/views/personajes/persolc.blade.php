@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">

            <button id="subbd" class=" my-2 btn btn-sm btn-primary">Subir {{$cantidad}} personajes </button>

            <div class="card">
                <div class="card-header">{{ __('Personajes de la BD') }}</div>

                <div class="card-body">

                    <table class="table">
                          <thead>
                            <tr>
                              <th scope="col">id</th>
                              <th scope="col">name</th>
                              <th scope="col">status</th>
                              <th scope="col">species</th>
                              <th scope="col">Acciones</th>
                            </tr>
                          </thead>
                          <tbody>

                    @foreach($personajes as $personaje)
                            <tr>
                              <th scope="row">{{ $personaje->id }}</th>
                              <td>{{ $personaje->name }}</td>
                              <td>{{ $personaje->status }}</td>
                              <td>{{ $personaje->species }}</td>
                              <td><a href="{{route('showperso', $personaje->id )}}" class="btn btn-sm btn-primary">Detalle</a></td>
                            </tr>
                    @endforeach
                    </tbody>
                </table>
                </div>
            </div>
        </div>
    </div>
</div>


<script type="text/javascript">
    $('#subbd').click(function(){
        Swal.fire({
          title: 'Estas Seguro?',
          text: "Si subes esta información se borrara la información ya existente en la base de datos!",
          icon: 'warning',
          showCancelButton: true,
          confirmButtonColor: '#3085d6',
          cancelButtonColor: '#d33',
          confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
          if (result.isConfirmed) {
            window.location.href = '{{route('subir')}}';
          }else{
            Swal.fire(
              'Cancelado!',
              'La información no se subio.',
              'warning'
            )
          }
        })
    });
    
</script>

@endsection