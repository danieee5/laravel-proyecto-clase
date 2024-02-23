<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Canción</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!-- Estilo de Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700&display=swap" rel="stylesheet">


    <style>
        body {
            background-color: #BED1CF;
            font-family: 'Montserrat', serif;
        }


        .container {
            max-width: 1200px;
            margin: 40px auto;
        }
    </style>

</head>

<body>
    <div class="container mt-5">
        <h2>Editar Canción</h2>
        <form action="{{ route('canciones.update', ['cancion' => $cancion->id]) }}" method="POST">


            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="nombre">Título</label>
                <input type="text" class="form-control" id="nombre" name="nombre" value="{{ $cancion->nombre }}" required>
            </div>
            <div class="form-group">
                <label for="autor">Autor</label>
                <input type="text" class="form-control" id="autor" name="autor" value="{{ $cancion->autor }}" required>
            </div>
            <div class="form-group">
                <label for="genero">Género</label>
                <input type="text" class="form-control" id="genero" name="genero" value="{{ $cancion->genero }}" required>
            </div>
            <div class="form-group">
                <label for="anio">Año</label>
                <input type="text" class="form-control" id="anio" name="anio" value="{{ $cancion->anio }}" required>
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

</html>
