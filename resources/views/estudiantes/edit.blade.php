@extends('plantillas.principal')
@section('contenido')


<form action="{{route('estudiantes.update', $estudiante->id)}}" method="post">
    @method('PUT')
    @csrf
    <label for='nombre'>Nombre</label>
    <input type='text' name='nombre' id='nombre' value="{{$estudiante->nombre}}">
    <label for='NombreDeUsuario'>Nombre de Usuario</label>
    <input type='text' name='nombre_de_usuario' id='NombreDeUsuario' value="{{$estudiante->nombre_de_usuario}}">
   <br>
    <input type="submit" value="ACTUALIZAR">
</form>


@endsection