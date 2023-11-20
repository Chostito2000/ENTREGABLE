<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $tour->nombre }}</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-top: 20px;
        }

        .tour-details {
            margin-bottom: 20px;
        }

        .comments {
            margin-top: 20px;
        }

        .comment-form textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .comment-form button {
            background-color: #4caf50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .comment-form button:hover {
            background-color: #45a049;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="tour-details">
            <h1>Brayan</h1>
            <h1>Flores Gonzales</h1>
        </div> 

        <div class="comments">
            <h2>Comentarios:</h2>
            <ul>
                <?php foreach ($comentarios as $comentario): ?>
                    <li><?= $comentario->comentario ?></li>
                <?php endforeach; ?>
            </ul>

            <div class="comment-form">
                <h2>Agregar Comentario:</h2>
                <form action="{{ route('comentarios.store') }}" method="POST">
                    <input type="hidden" name="tour_id" value="<?= $tour->id ?>">
                    <textarea name="comentario" rows="3" placeholder="Escribe tu comentario aquí"></textarea>
                    <button type="submit">Publicar Comentario</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>