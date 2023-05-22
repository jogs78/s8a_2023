@extends('plantillas.principal')
@section('contenido')
<table border="2px">
    <thead>
        <tr>
            <th>id</th>
            <th>descripcion</th>
            <th>opciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($docente->experiencias as $experiencia)
        <tr>
            <td>{{$experiencia->id}}</td>
            <td>{{$experiencia->descripcion}}</td>
            <td>
                <a href="{{route('docentes.experiencias.edit',[$docente->id,$experiencia->id])}}">ACTUALIZAR Exp</a>
                <form action="{{route('docentes.experiencias.destroy', [$docente->id,$experiencia->id])}}" method="post">
                    @method('DELETE')
                    @csrf
                    <input type="submit" value="BORRAR">
                </form>
        </td>
        </tr>
        
        @endforeach
    </tbody>
    <tfoot>
        <tr><td style="text-align: center" colspan="3">
<a  href="{{route('docentes.experiencias.create',$docente->id)}}">Agregar</a>
        
        </td></tr>
    </tfoot>
</table>
            
@endsection