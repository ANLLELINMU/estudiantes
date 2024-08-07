@extends('layout/template')

@section('title', 'Registrar Estudiante | estudiantes1')

@section('contenido')

<main>
    <div class="container py-4">
            <link rel="stylesheet" href="{{asset('interfaz.css')}}">

                    <h2 class="text-center">REGISTRAR ESTUDIANTES</h2>
                    @if($errors->any())

        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>

                 @endif
               <div class="form-container" style="border: 4px solid #2193b0; padding:25px; border-radius:8px; background-color:#2193b0">
        <form action="{{route('estudiante.store')}}" method="post">

              @csrf
            <div class="mb-3 row">
                <label for="name" class="fs-4">Name:</label>
                <div class="card-5">
                    <input type="text" class="form-control" name="name" size="18" id="name" value="{{ old ('name') }}" required>

                </div>

            </div>

            <div class="mb-3 row">
                        <label for="lastname" class="fs-4">Last Name:</label>
                        <div class="card-5">
                            <input type="text" class="form-control" name="lastname" size="18" id="lastname" value="{{ old ('lastname') }}" required>
           
                        </div>
                        
                <div class="botones">
                    <a href="{{url ('estudiante')}}" class="btn btn-secondary">Regresar</a>

                    <button type="submit" class="btn btn-success">Guardar</button>
              </div>
            </div>
        </form>
    </div>
   
   <style>
        .botones {
            padding-top: 50px;
        }
    </style>
</main>   