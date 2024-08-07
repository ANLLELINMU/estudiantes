
@extends('layout/template')

@section('title', 'estudiantes | estudiantes1')

@section('contenido')

<main>
    <div class= "container py -4 my-4">
        <div class="col-12">      
            <div style="border: 6px solid #2193b0; padding:25px; border-radius:8px">  
            <h2> Lista de Estudiantes</h2>
            <a href="{{url ('estudiante/create')}}" class="btn btn-primary btn-sm">Nuevo Registro</a>   
            <div>      
                          
                        <form class="d-flex my-2 my-lg-0" style="float: right;">
                      
                           <input name="buscarpor" class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" value=" {{ old('buscarpor', $buscarpor) }}">
                           <button class="btn btn-dark" type="submit">Search</button>
                        </form>

                                       
                                                
            </div>        
            <table class="table text-center mt-4 table-hover ">
                <thead>
                    <tr>
                        <th># </th>
                        <th>Name</th>
                        <th>Last Name</th>
                        <th colspan="2">Opciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($myfirstmodels as $key=> $myfirstmodel)
                        <tr>
                            <td>{{ $key+1}}</td>
                            <td>{{ $myfirstmodel-> name }}</td>
                            <td>{{ $myfirstmodel-> lastname }}</td>
                            <td> <a href="{{url('estudiante/'.$myfirstmodel->id.'/edit') }}" class="btn btn-outline-dark" >Editar</a></td>
                            <td>
                                <form action= "{{url('estudiante/'.$myfirstmodel->id) }}" method="post" class="m-0 rounded-end"> 
                                    @method("DELETE")
                                    @csrf
                                    <button type="submit" class="btn btn-outline-danger" onclick="return confirm ('Esta seguro que desea eliminar?')">Eliminar</button>
                                </form>
                            </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

                {{$myfirstmodels->links()}}
        
          
          
          <style>
                body
                    {
                     background: #83a4d4;  
                     background: -webkit-linear-gradient(to right, #b6fbff, #83a4d4);  
                     background: linear-gradient(to right, #b6fbff, #83a4d4); 


                        }
                table{
                     margin: 0 auto;
                     text-align: center;
                     vertical-align: middle;
    
    
                     }
            </style>
      
    </div>
    
</main>

