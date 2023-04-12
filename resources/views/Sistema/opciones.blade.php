@extends('plantillas.principal')
@section('contenido')
@if (session('AuthGuard'))
        {{ session('AuthGuard') }}
@endif
    <ul>
        <li><a href="{{ route('saludar') }}">Saludar..</a></li>
        <li><a href="{{ route('despedir') }}">Despedir..</a></li>
        <li><a href="{{ route('seleccionar') }}">Seleccionar Idioma..</a></li>
        <li><a href="{{ route('salida') }}">Salir..</a></li>
        <li><a href="{{ route('paquetes.index')}}">PAQUETES</a></li>
        <li><a href="{{ route('estudiantes.index')}}">ESTUDIANTES</a></li>
    </ul>
@endsection
