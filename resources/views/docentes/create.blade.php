@extends('plantillas.principal')
@section('contenido')


<form action="{{route('docentes.store')}}" method="post" enctype="multipart/form-data">
    @csrf
    <label for='nombre'>Nombre</label>
    <input type='text' name='nombre' id='nombre'>
    <label for='NombreDeUsuario'>Nombre de Usuario</label>
    <input type='text' name='nombre_de_usuario' id='NombreDeUsuario'>
    <label for='clave'>Clave del usuario</label>
    <input type='password' name='clave' id='clave'>
    <label for='pwd'>Repida la clave</label>
    <input type='password' name='clave2' id='pwd'>
    <label for='imagen'>Imagen</label>
    <input type='file' name='imagen' id='imagen'>
    <br>
    <input type="submit" value="GUARDAR">
</form>


@endsection