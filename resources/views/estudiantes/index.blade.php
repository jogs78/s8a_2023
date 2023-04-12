@extends('plantillas.principal')
@section('contenido')
    Listar  estudiantes<br>
    
    <table border="1">
        <thead>
            <th>#</th>
            <th>Nombre</th>
            <th>Acciones</th>
        </thead>
        <tbody>
            @foreach ($todos as $uno)
            <tr>
                <td>{{$uno->id}}</td>
                <td>{{$uno->nombre}}</td>
                <td>
                    <a href="{{route('estudiantes.edit',$uno->id)}}">ACTUALIZAR</a>
                    <form action="{{route('estudiantes.destroy', $uno->id)}}" method="post">
                        @method('DELETE')
                        @csrf
                        <input type="submit" value="BORRAR">
                    </form>
            </td>
            </tr>
            
            @endforeach
    
        </tbody>

    </table>

    <a href="{{route('estudiantes.create')}}">AGREGAR UN NUEVO ESTUDIANTES</a>

@endsection