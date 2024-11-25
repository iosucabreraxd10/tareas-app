<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trabajadores</title>
</head>
<body>
    <h1>Lista Trabajadores</h1>
    <ul>
        @foreach ($trabajadores as $trabajador)
        <li>
            {{$trabajador->nombre}} {{$trabajador->apellido}} {{$trabajador->dni}}
        </li>
        @endforeach
    </ul>
    <a href="/trabajadores/create">Añadir trabajador</a>
    <a href="/trabajadores/show">Ver tareas de los trabajadores</a>
</body>
</html>