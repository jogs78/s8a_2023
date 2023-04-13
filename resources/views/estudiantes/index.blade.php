@extends('plantillas.principal')
@section('contenido')
    @can('viewAny', App\Models\Estudiante::class)
        Listar  estudiantes<br>
        <table border="1">
            <thead>
                <th>#</th>
                <th>Nombre</th>
                <th>Foto</th>
                <th>Acciones</th>
            </thead>
            <tbody>
                @foreach ($todos as $uno)
                <tr>
                    <td>{{$uno->id}}</td>
                    <td>{{$uno->nombre}}</td>
                    <td><img src="{{route('estudiantes.show',$uno->id)}}" alt=""></td>
                    <td>
                        @can('update', $uno)
                            <a href="{{route('estudiantes.edit',$uno->id)}}">ACTUALIZAR</a>                        
                        @endcan
                        @can('delete', $uno)
                            <form action="{{route('estudiantes.destroy', $uno->id)}}" method="post">
                                @method('DELETE')
                                @csrf
                                <input type="submit" value="BORRAR">
                            </form>
                            
                        @endcan
                </td>
                </tr>
                @endforeach        
            </tbody>
        </table>
        @can('create', App\Models\Estudiante::class)
            <a href="{{route('estudiantes.create')}}">AGREGAR UN NUEVO ESTUDIANTES</a>        
        @endcan
    @else
        NO PUEDE POR SU TIPO DE USUARIO
    @endcan

@endsection