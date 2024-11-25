<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Añadir Trabajador</h1>
    <form action="/trabajadores/store" method="POST">
        @csrf
        @if ($errors->any())
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif
        <input type="text" name="nombre" placeholder="Nombre trabajador">
        <input type="text" name="apellido" placeholder="Apellido trabajador">
        <input type="text" name="dni" placeholder="DNI del trabajador">
        <input type="submit">   
    </form>
    <a href="/trabajadores/index">Volver a la lista</a>
</body>
</html>