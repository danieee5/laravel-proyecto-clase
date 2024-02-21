<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Canciones</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .container {
            max-width: 800px;
        }
        .btn-create {
            margin-bottom: 20px;
        }
        .song-info {
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <h2 class="mb-4">Lista de Canciones</h2>
        <a href="{{ route('canciones.create') }}" class="btn btn-success btn-create">Añadir Nueva Canción</a>
        
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        
        <ul class="list-group">
            @foreach ($canciones as $cancion)
                <li class="list-group-item">
                    <h5 class="song-info">Nombre: {{ $cancion->nombre }}</h5>
                    <p class="song-info">Autor(es): {{ $cancion->autores }}</p>
                    <p class="song-info">Género: {{ $cancion->genero }}</p>
                    <p class="song-info">Año: {{ $cancion->año }}</p>
                    <a href="{{ route('canciones.edit', $cancion->id) }}" class="btn btn-primary btn-sm">Editar</a>
                    <form action="{{ route('canciones.destroy', $cancion->id) }}" method="POST" style="display:inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                    </form>
                </li>
            @endforeach
        </ul>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
