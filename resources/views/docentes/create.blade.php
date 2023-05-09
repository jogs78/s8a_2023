@extends('plantillas.principal')
@section('contenido')

@if ($errors->any())
    errores
@endif

<form action="{{route('docentes.store')}}" method="post" enctype="multipart/form-data">
    @csrf
    
    @error('nombre')
        **
    @enderror
    <label for='nombre'>Nombre</label>
    <input type='text' name='nombre' id='nombre' value={{old('nombre')}}>

    @error('nombre_de_usuario')
        **
    @enderror
    <label for='NombreDeUsuario'>Nombre de Usuario</label>
    <input type='text' name='nombre_de_usuario' id='NombreDeUsuario' value={{old('nombre_de_usuario')}}>
    
    <label for='clave'>Clave del usuario</label>
    <input type='password' name='clave' id='clave'>
    
    @error('clave')
    {{ $message }}
    @enderror
    <label for='pwd'>Repita la clave</label>
    <input type='password' name='clave_confirmation' id='pwd'>
    
    <label for='imagen'>Imagen</label>
    <input type='file' name='imagen' id='imagen'>
    
    <br>
    <input type="submit" value="GUARDAR">
</form>


@endsection