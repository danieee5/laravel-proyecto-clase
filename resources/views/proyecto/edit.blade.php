<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Canción</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h2>Editar Canción</h2>
        <form action="{{ route('canciones.update', $cancion->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="nombre">Título</label>
                <input type="text" class="form-control" id="nombre" name="nombre" value="{{ $cancion->nombre }}" required>
            </div>
            <div class="form-group">
                <label for="autores">Autores</label>
                <input type="text" class="form-control" id="autores" name="autores" value="{{ $cancion->autores }}" required>
            </div>
            <div class="form-group">
                <label for="genero">Género</label>
                <input type="text" class="form-control" id="genero" name="genero" value="{{ $cancion->genero }}" required>
            </div>
            <div class="form-group">
                <label for="año">Año</label>
                <input type="text" class="form-control" id="año" name="año" value="{{ $cancion->año }}" required>
            </div>
            <button type="submit" class="btn btn-primary">Guardar Cambios</button>
            <a href="{{ route('canciones.index') }}" class="btn btn-secondary">Cancelar</a>
        </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
