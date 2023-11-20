<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Tours</title>
</head>
<body>
    <div style="text-align: center; padding: 20px;">
        <h2 style="color: #3498db;">Lista de Tours</h2>

        <table style="width: 80%; margin: 0 auto; border-collapse: collapse;">
            <tr style="background-color: #3498db; color: white;">
                <th>Nombre</th>
                <th>Descripción</th>
                <th>Imagen</th>
                <th>Acciones</th>
            </tr>
            @foreach($tours as $tour)
                <tr style="border: 1px solid #ddd; padding: 10px; text-align: left;">
                    <td>{{ $tour->nombre }}</td>
                    <td>{{ $tour->descripcion }}</td>
                    <td><img src="{{ $tour->imagen_url }}" alt="{{ $tour->nombre }}" style="max-width: 100%; border-radius: 8px;"></td>
                    <td>
                        <a href="{{ route('tours.actualizar', ['id' => $tour->id]) }}">Actualizar</a> 
                        <a href="{{ route('tours.eliminar', ['id' => $tour->id]) }}">Eliminar</a>
                    </td>
                </tr>
            @endforeach
        </table>

        <br>
        <a href="{{ route('tours.formularioCrearTour') }}">Agregar Nuevo Tour</a>
    </div>
</body>
</html>
