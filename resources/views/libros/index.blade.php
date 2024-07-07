<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <h1>Libros</h1>
    <a href="{{ route('libros.create') }}">Añadir Libro</a>
    <ul>
        @foreach ($libros as $libro)
            <li>
                <a href="{{ route('libros.show', $libro->codigo) }}">{{ $libro->titulo }}</a>
                <a href="{{ route('libros.edit', $libro->codigo) }}">Editar</a>
                <form action="{{ route('libros.destroy', $libro->codigo) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Eliminar</button>
                </form>
            </li>
        @endforeach
    </ul>
</body>
</html>