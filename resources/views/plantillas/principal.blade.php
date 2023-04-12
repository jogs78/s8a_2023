<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
<style type="text/css">
    .encabezado {
        background-color: red;
        display: inline-block;
        width: 90%;
        height: 10%;
      border: 15px solid green;
      padding: 50px;
      margin: 20px;
    }
</style>
</head>
<body>
    @guest
    <header class="encabezado">
        sistema sin usuario
    </header>
        
    @else
        <header class="encabezado">
            sistema usuado por {{Auth::user()->nombre}}
        </header>
    @endguest
@yield('contenido')
</body>
</html>