<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Nueva Canción</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/css/bootstrap.min.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Lora:wght@400;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Lora', serif;
        }
        .container {
            max-width: 800px;
            margin-top: 20px;
        }
        .btn-custom {
            background-color: #66a4e6;
            color: white;
        }
        .header-custom {
            color: #79c694;
            margin-bottom: 20px;
        }
    </style>
</head>

<body>
    <div class="container">
        <h2 class="header-custom">Crear Nueva Canción</h2>
        <form>
            <div class="mb-3">
                <label for="nombre" class="form-label">Título</label>
                <input type="text" class="form-control" id="nombre" name="nombre">
            </div>

            <div class="mb-3">
                <label for="autores" class="form-label">Autores</label>
                <input type="text" class="form-control" id="autores" name="autores">
            </div>

            <div class="mb-3">
                <label for="genero" class="form-label">Género</label>
                <input type="text" class="form-control" id="genero" name="genero">
            </div>

            <div class="mb-3">
                <label for="año" class="form-label">Año</label>
                <input type="text" class="form-control" id="año" name="año">
            </div>
            
            <button type="submit" class="btn btn-custom">Guardar Canción</button>
            <a href="#" class="btn btn-outline-secondary">Cancelar</a>
        </form>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.6.0.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/js/bootstrap.min.js"></script>
</body>
</html>
