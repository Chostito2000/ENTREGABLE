<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Nuevo Tour</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
        }

        .container {
            text-align: center;
            padding: 20px;
        }

        h2 {
            color: #3498db;
        }

        form {
            display: inline-block;
            text-align: left;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            margin: auto;
        }

        form label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
        }

        form input,
        form textarea {
            width: 100%;
            padding: 8px;
            margin-bottom: 16px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        form button {
            background-color: #3498db;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        a {
            text-decoration: none;
            color: #3498db;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Crear Nuevo Tour</h2>
        @if(session('success'))
            <p style="color: green;">{{ session('success') }}</p>
        @endif
        <form method="post" action="{{ route('tours.agregar') }}">
            @csrf
            <label for="nombre">Nombre:</label>
            <input type="text" name="nombre" required>
            <label for="descripcion">Descripción:</label>
            <textarea name="descripcion" required></textarea>
            <label for="imagen_url">URL de la Imagen:</label>
            <input type="url" name="imagen_url" required>
            <label for="tipo_actividad">Tipo de Actividad:</label>
            <input type="text" name="tipo_actividad" required>
            <button type="submit">Crear Tour</button>
        </form>
        <br>
        <a href="{{ route('tours.index') }}">Volver a la Lista de Tours</a>
    </div>
</body>
</html>
