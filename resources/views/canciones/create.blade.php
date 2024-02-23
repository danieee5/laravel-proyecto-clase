<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Nueva Canción</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/css/bootstrap.min.css">
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

<form action="{{ route('canciones.store') }}" method="POST">
    @csrf
    <div class="form-group">
        <label for="nombre" class="form-label">Título</label>
        <input type="text" class="form-control" id="nombre" name="nombre" required>
    </div>

    <div class="form-group">
        <label for="autor" class="form-label">Autor</label>
        <input type="text" class="form-control" id="autor" name="autor" required>
    </div>

    <div class="form-group">
        <label for="genero" class="form-label">Género</label>
        <input type="text" class="form-control" id="genero" name="genero" required>
    </div>

    <div class="form-group">
        <label for="anio" class="form-label">Año</label>
        <input type="text" class="form-control" id="anio" name="anio" required>
    </div>
    
    <button type="submit" class="btn btn-custom">Guardar Canción</button>
</form>


    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.6.0.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/js/bootstrap.min.js"></script>
</body>
</html>