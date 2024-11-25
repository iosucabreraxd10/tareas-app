<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar</title>
</head>
<body>
<h1>Editar/Eliminar Tarea</h1>
    <form action="/tareas/update" method="POST">
        @csrf
        @method('PATCH')
        @foreach ($tareas as $tarea)
        <input type="text" name="titulo" value="{{$tarea->titulo}}">
        <textarea name="descripcion" value="{{$tarea->descripcion}}"></textarea>
        <input type="date" name="fecha_limite" value="{{$tarea->fecha_limite}}">
        <select name="trabajador_id">
            @foreach ($trabajadores as $trabajador)
            <option value="{{$tarea->trabajador_id}}">
                {{$trabajador->nombre}} {{$trabajador->apellido}}
            </option>
            @endforeach
        </select>
        <input type="submit">
        @endforeach
    </form>
</body>
</html>