@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <a class="btn btn-sm btn-primary my-2" href="{{ route('persolc') }}">Volver</a>
            <button id="editFormLc" style="width: 150px; float: right !important;" class="btn btn-sm btn-warning my-2">Editar</button>
            <button id="cancelFormLc" style="width: 150px; float: right !important;" class="btn btn-sm btn-danger my-2 d-none">Cancelar</button>


            <div id="mostrador" class="card">
                <div class="card-header">{{ $personaje->name }}</div>

                <div class="card-body row ">

                    <div style="border-right: 1px solid rgba(0,0,0,0.3);" class="img col-md-4 text-center">
                        <img class="img-thumbnail rounded" width="200" src="{{ $personaje->image }}">
                    </div>  

                    <div class="info col-md-6">
                        <ul class="list-group">
                          <li class="list-group-item">Tipo: {{ $personaje->type }}</li>
                          <li class="list-group-item">Genero: {{ $personaje->gender }}</li>
                          <li class="list-group-item">Nombre: {{ $personaje->origin_name }}</li>
                          <li class="list-group-item">Url: {{ $personaje->origin_url }}</li>
                        </ul>
                    </div>

                </div>

                
            </div>

                <div id="formulario" class="card d-none">

                    <div class="card-header">Editar {{ $personaje->name }}</div>
                
                    <form method="POST" action="{{ route('personajes.update', $personaje->id) }}"  role="form" enctype="multipart/form-data" class="form-horizontal mx-4 my-2" >
                        {{ method_field('PATCH') }}
                        @csrf

                        @include('personajes.formulario')
                     
                      <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>


        </div>
    </div>
</div>

<script type="text/javascript">
        
    $('#editFormLc').click(function(){
        $('#mostrador').addClass('d-none');
        $('#formulario').removeClass('d-none');
        $('#editFormLc').addClass('d-none');
        $('#cancelFormLc').removeClass('d-none');
    });


    $('#cancelFormLc').click(function(){
        $('#mostrador').removeClass('d-none');
        $('#formulario').addClass('d-none');
        $('#editFormLc').removeClass('d-none');
        $('#cancelFormLc').addClass('d-none');
    });
    

</script>
@endsection
