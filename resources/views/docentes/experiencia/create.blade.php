@extends('plantillas.principal')
@section('contenido')


<form action="{{route('docentes.experiencias.store', $docente->id)}}" method="post"  enctype="multipart/form-data">
    @csrf
    <label for='descripcion'>Descripcion</label>
    <input type='text' name='descripcion' id='descripcion'>
  
    <br>
    <input type="submit" value="GUARDAR">
</form>


@endsection