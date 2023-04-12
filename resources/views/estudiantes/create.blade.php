@extends('plantillas.principal')
@section('contenido')


<form action="{{route('estudiantes.store')}}" method="post">
    @csrf
    <label for='nombre'>Nombre</label>
    <input type='text' name='nombre' id='nombre'>
    <br>
    <input type="submit" value="GUARDAR">
</form>


@endsection