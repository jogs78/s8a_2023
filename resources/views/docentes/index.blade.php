@extends('plantillas.principal')
@section('contenido')
    Listar docentes<br>
    
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
                    <a href="{{route('docentes.edit',$uno->id)}}">ACTUALIZAR</a>
                    <form action="{{route('docentes.destroy', $uno->id)}}" method="post">
                        @method('DELETE')
                        @csrf
                        <input type="submit" value="BORRAR">
                    </form>
            </td>
            </tr>
            
            @endforeach
    
        </tbody>

    </table>

    <a href="{{route('docentes.create')}}">AGREGAR UN NUEVO DOCENTE</a>

@endsection