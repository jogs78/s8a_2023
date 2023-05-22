@extends('plantillas.principal')
@section('contenido')


<form action="{{route('docentes.experiencias.update', [$docente->id, $experiencia->id ])}}" method="post">
    @method('PUT')
    @csrf
    <label for='experiencia'>Experiencia</label>
    <input type='text' name='descripcion' id='experiencia' value="{{$experiencia->descripcion}}">
    <br>
    <input type="submit" value="ACTUALIZAR">
</form>


@endsection