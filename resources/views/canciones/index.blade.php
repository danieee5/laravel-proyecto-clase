<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Canciones</title>
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

        .header {
            background-color: #AC92A6;
            /* Color de fondo de la cabecera */
            text-align: center;
            padding: 20px;
            margin-bottom: 20px;
        }

        .header h2 {
            color: white;
            margin: 0;
        }

        .btn-create {
            background-color: #AC92A6;
            /* Color del botón */
            color: white;
            padding: 10px 20px;
            font-size: 1.2em;
            /* Tamaño del texto del botón */
            border: none;
            border-radius: 5px;
            margin-bottom: 20px;
            display: block;
            width: 200px;
            margin-left: auto;
            margin-right: auto;
        }

        .image-section {
            background-color: #FFF5F5;
            padding: 20px;
            text-align: center;
        }

        .image-section img {
            max-width: 50%;
            height: 400px;
            width: 400px;
            border-radius: 10px;
        }
    </style>
</head>

<body>
    <div class="header">
        <h2>¡Lista de Canciones!</h2>
    </div>
    <div class="container">
        <button onclick="location.href='{{ route('canciones.create') }}'" class="btn-create">Añadir Nueva
            Canción</button>

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <ul class="list-group">
            @foreach ($canciones as $cancion)
                <li class="list-group-item">
                    <h4 class="song-info">Nombre: {{ $cancion->nombre }}</h4>
                    <!-- Corrección en la etiqueta de cierre -->
                    <p class="song-info">Autor(es): {{ $cancion->autor }}</p>
                    <!-- Corrección del campo 'autores' a 'autor' -->
                    <p class="song-info">Género: {{ $cancion->genero }}</p>
                    <p class="song-info">Año: {{ $cancion->anio }}</p> <!-- Corrección del campo 'año' a 'anio' -->
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


    <div class="image-section">
        <img src="https://i.pinimg.com/736x/c1/d8/17/c1d817dced75bfc0c3eec1f368cedfe5.jpg" alt="Imagen Decorativa" />
        <img src="https://img.freepik.com/free-photo/vintage-books-thrift-shop-arrangement_23-2150269090.jpg"
            alt="Imagen Decorativa" />
    </div>
    </div>



    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
