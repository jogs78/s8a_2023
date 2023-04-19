@extends('plantillas.principal')
@section('contenido')


<form action="{{route('estudiantes.update', $estudiante->id)}}" method="post">
    @method('PUT')
    @csrf
    <label for='nombre'>Nombre</label>
    <input type='text' name='nombre' id='nombre' value="{{$estudiante->nombre}}">
    <br>
    <input type="submit" value="ACTUALIZAR">
</form>


@endsection