<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tareas</title>
</head>
<body>
    <h1>Añadir Tarea</h1>
    <form action="/tareas/store" method="POST">
        @csrf
        <input type="text" name="titulo" placeholder="Titulo tarea">
        <textarea name="descripcion" placeholder="Descripcion tarea"></textarea>
        <input type="date" name="fecha_limite" id="">
        <select name="trabajador_id">
            @foreach ($trabajadores as $trabajador)
            <option value="{{$trabajador->id}}">
                {{$trabajador->nombre}} {{$trabajador->apellido}}
            </option>
            @endforeach
        </select>
        <input type="submit">
    </form>
</body>
</html>